<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Zar;

class ZarController extends Controller
{
    public function index(){

    return view('frontend.zar');
    }
    public function zarAdd(Request $request){
      $title = $request->input('title');
      $body = $request->input('content');
      $phone = $request->input('phone');
      $email = $request->input('email');

      $zar = new Zar();
      $zar->title = $title;
      $zar->body = $body;
      $zar->phone = $phone;
      $zar->email = $email;
      $zar->save();
      return redirect('/');
    }
}
