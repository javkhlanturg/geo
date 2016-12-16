<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Enews;
class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }

    public function allnews(){
      $list = Enews::all();
      return view('user.newslist', ['list'=>$list]);
    }
}
