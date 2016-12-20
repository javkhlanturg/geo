<?php

namespace TCG\Voyager\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getSlug(Request $request)
    {
        if (isset($this->slug)) {
            $slug = $this->slug;
        } else {
            $slug = explode('.', $request->route()->getName())[1];
        }

        return $slug;
    }

    public function insertUpdateData($request, $slug, $rows, $data)
    {
        $rules = [];
        $messages = [];

        foreach ($rows as $row) {
            $options = json_decode($row->details);
            if (isset($options->validation)) {
                if (isset($options->validation->rule)) {
                    $rules[$row->field] = $options->validation->rule;
                }
                if (isset($options->validation->messages)) {
                    foreach ($options->validation->messages as $key => $msg) {
                        $messages[$row->field.'.'.$key] = $msg;
                    }
                }
            }

            $content = $this->getContentBasedOnType($request, $slug, $row);
            if ($content === null) {
                if (isset($data->{$row->field})) {
                    $content = $data->{$row->field};
                }
                if ($row->field == 'password') {
                    $content = $data->{$row->field};
                }
            }
            if ($row->type == 'select_multiple') {
                // do nothing
            } else {
                $data->{$row->field} = $content;
            }
        }

        $this->validate($request, $rules, $messages);

        $data->save();

        if ($row->type == 'select_multiple') {
            $data->{$row->field}()->sync($content);
        }

        return $data;
    }

    public function getContentBasedOnType(Request $request, $slug, $row)
    {
        $content = null;
        switch ($row->type) {
            /********** PASSWORD TYPE **********/
            case 'password':
                $pass_field = $request->input($row->field);

                if (isset($pass_field) && !empty($pass_field)) {
                    return bcrypt($request->input($row->field));
                }
                break;

            /********** CHECKBOX TYPE **********/
            case 'checkbox':
                $checkBoxRow = $request->input($row->field);

                if (isset($checkBoxRow)) {
                    return 1;
                }

                $content = 0;
                break;
            case 'select_dropdown':
                    $checkBoxRow = $request->input($row->field);
                    $content = $checkBoxRow;
                    break;

            /********** FILE TYPE **********/
            case 'file':
                if ($file = $request->file($row->field)) {
                $path = $slug.'/'.date('F').date('Y').'/';
                $name = Str::random(20).'.'.$file->getClientOriginalExtension();
                $file->move($path, $name);

                return $path.$name;
                }
            // no break

            /********** SELECT MULTIPLE TYPE **********/
            case 'select_multiple':
                $content = $request->input($row->field);
                if ($content === null) {
                    $content = [];
                }

                return $content;

            /********** IMAGE TYPE **********/
            case 'image':
            if ($request->hasFile($row->field)) {

                $file = $request->file($row->field);
              $path = $slug.'/'.date('F').date('Y').'/';
              $name = Str::random(20).'.'.$file->getClientOriginalExtension();
              $file->move($path, $name);
              $data = array_merge(['photo' => $path."{$name}"], $request->all());

              return $path.$name;

              }
                break;

            /********** ALL OTHER TEXT TYPE **********/
            default:
                return $request->input($row->field);
            // no break
        }

        return $content;
    }

    public function generate_views(Request $request)
    {
        //$dataType = DataType::where('slug', '=', $slug)->first();
    }

    public function deleteFileIfExists($path)
    {
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
