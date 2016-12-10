<?php

namespace TCG\Voyager\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoyagerMediaController extends Controller
{
    /** @var string */
    private $filesystem;

    /** @var string */
    private $directory = '';

    public function __construct()
    {
        $this->filesystem = config('filesystems.default');
        if ($this->filesystem === 'local') {
            $this->directory = 'public';
        } elseif ($this->filesystem === 's3') {
            $this->directory = '';
        }
    }

    public function index()
    {
        return view('voyager::media.index');
    }

    public function files(Request $request)
    {
        $folder = $request->folder;
        if ($folder == '/') {
            $folder = '';
        }
        $dir = $this->directory.$folder;

        return response()->json([
            'name'          => 'files',
            'type'          => 'folder',
            'path'          => $dir,
            'folder'        => $folder,
            'items'         => $this->getFiles($dir),
            'last_modified' => 'asdf',
        ]);
    }

    private function getFiles($dir)
    {
        $files = [];
        $storageFiles = Storage::files($dir);
        $storageFolders = Storage::directories($dir);

        foreach ($storageFiles as $file) {
            $files[] = [
                'name'          => strpos($file, '/') > 1 ? str_replace('/', '', strrchr($file, '/')) : $file,
                'type'          => Storage::mimeType($file),
                'path'          => Storage::disk(config('filesystem.default'))->url($file),
                'size'          => Storage::size($file),
                'last_modified' => Storage::lastModified($file),
            ];
        }

        foreach ($storageFolders as $folder) {
            $files[] = [
                'name'          => strpos($folder, '/') > 1 ? str_replace('/', '', strrchr($folder, '/')) : $folder,
                'type'          => 'folder',
                'path'          => Storage::disk(config('filesystem.default'))->url($folder),
                'items'         => '',
                'last_modified' => '',
            ];
        }

        return $files;
    }

    // New Folder with 5.3

    public function new_folder(Request $request)
    {
        $new_folder = $request->new_folder;
        $success = false;
        $error = '';

        if (Storage::exists($new_folder)) {
            $error = 'Уучлаарай энэ хавтас үүссэн байна, хэрэв та шинээр нэмэхийг хүсвэл хавтасыг устгана уу';
        } else {
            if (Storage::makeDirectory($new_folder)) {
                $success = true;
            } else {
                $error = 'Уучлаарай хавтас үүсгэх үед алдаа гарлаа та өөрийн эрхээ шалгаад дахин үзнэ үү';
            }
        }

        return compact('success', 'error');
    }

    // Delete File or Folder with 5.3

    public function delete_file_folder(Request $request)
    {
        $folderLocation = $request->folder_location;
        $fileFolder = $request->file_folder;
        $type = $request->type;
        $success = true;
        $error = '';

        if (is_array($folderLocation)) {
            $folderLocation = rtrim(implode('/', $folderLocation), '/');
        }

        $location = "{$this->directory}/{$folderLocation}";
        $fileFolder = "{$location}/{$fileFolder}";

        if ($type == 'folder') {
            if (!Storage::deleteDirectory($fileFolder)) {
                $error = 'Уучлаарай хавтасыг устгах үед алдаа гарлаа, та өөрийн эрхээ шалгаад дахин үзнэ үү';
                $success = false;
            }
        } elseif (!Storage::delete($fileFolder)) {
            $error = 'Уучлаарай хавтас устгах үед алдаа гарлаа та өөрийн эрхээ шалгаад дахин үзнэ үү';
            $success = false;
        }

        return compact('success', 'error');
    }

    // GET ALL DIRECTORIES Working with Laravel 5.3

    public function get_all_dirs(Request $request)
    {
        $folderLocation = $request->folder_location;

        if (is_array($folderLocation)) {
            $folderLocation = rtrim(implode('/', $folderLocation), '/');
        }

        $location = "{$this->directory}/{$folderLocation}";

        return response()->json(
            str_replace($location, '', Storage::directories($location))
        );
    }

    // NEEDS TESTING

    public function move_file(Request $request)
    {
        $source = $request->source;
        $destination = $request->destination;
        $folderLocation = $request->folder_location;
        $success = false;
        $error = '';

        if (is_array($folderLocation)) {
            $folderLocation = rtrim(implode('/', $folderLocation), '/');
        }

        $location = "{$this->directory}/{$folderLocation}";
        $source = "{$location}/{$source}";
        $destination = strpos($destination, '/../') !== false
            ? $this->directory.'/'.dirname($folderLocation).'/'.str_replace('/../', '', $destination)
            : "{$location}/{$destination}";

        if (!file_exists($destination)) {
            if (Storage::move($source, $destination)) {
                $success = true;
            } else {
                $error = 'Уучлаарай хавтасыг зөөх үед алдаа гарлаа, та өөрийн эрхээ шалгаад дахин үзнэ үү';
            }
        } else {
            $error = 'Уучлаарай энэ хавтсанд ийм нэртэй Файл/Хавтас үүссэн байна.';
        }

        return compact('success', 'error');
    }

    // RENAME FILE WORKING with 5.3

    public function rename_file(Request $request)
    {
        $folderLocation = $request->folder_location;
        $filename = $request->filename;
        $newFilename = $request->new_filename;
        $success = false;
        $error = false;

        if (is_array($folderLocation)) {
            $folderLocation = rtrim(implode('/', $folderLocation), '/');
        }

        $location = "{$this->directory}/{$folderLocation}";

        if (!Storage::exists("{$location}/{$newFilename}")) {
            if (Storage::move("{$location}/{$filename}", "{$location}/{$newFilename}")) {
                $success = true;
            } else {
                $error = 'Уучлаарай хавтасыг зөөх үед алдаа гарлаа, та өөрийн эрхээ шалгаад дахин үзнэ үү.';
            }
        } else {
            $error = 'Файл эсвэл Хавтас магадгүй ийм нэртэй үүссэн байна. Та өөр нэр өгнө үү.';
        }

        return compact('success', 'error');
    }

    // Upload Working with 5.3

    public function upload(Request $request)
    {
        try {
            $request->file->store($request->upload_path);
            $success = true;
            $message = 'Шинэ файл амжилттай хуулагдлаа!';
        } catch (Exception $e) {
            $success = false;
            $message = $e->getMessage();
        }

        return response()->json(compact('success', 'message'));
    }
}
