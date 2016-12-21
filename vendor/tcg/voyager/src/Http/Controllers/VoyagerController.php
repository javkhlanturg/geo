<?php

namespace TCG\Voyager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Voyager;

class VoyagerController extends Controller
{
    public function index()
    {
        return view('voyager::index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('voyager.logout');
    }

    public function upload(Request $request)
    {
      if ($file = $request->file($row->field)) {
        $path = 'uploads/'.date('F').date('Y').'/';
        $name = Str::random(20).'.'.$file->getClientOriginalExtension();
        $file->move($path, $name);
      }
      $status = "success";

        // echo out script that TinyMCE can handle and update the image in the editor
        return "<script> parent.setImageValue('".$path.$name."'); </script>";
    }

    public function profile()
    {
        return view('voyager::profile');
    }
}
