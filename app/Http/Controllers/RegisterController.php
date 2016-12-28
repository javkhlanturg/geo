<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Validator;
use Messages;

class RegisterController extends Controller
{
    public function index(){
        return view('frontend.register');
    }

    public function register(Request $request){
  //    $email = $request->input('email');
  $v = Validator::make($request->all(), [
      'email' => 'required|email|unique:users'
    ]);

    if ($v->fails())
    {
        return redirect()->back()->withErrors($v->errors());
    }


      $user =  new User;
      $user->name = $request->input('name');
      $user->email = $email;
      $user->password = \Hash::make($request->input('password'));
      $user->phone = $request->input('phone');
      $user->avatar = 'users/default.png';
      $user->role_id = '2';
      $user->save();
      return redirect('/login')
      ;
    }

}
