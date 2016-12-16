<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnewsController extends Controller
{
    public function newslist(){
      $slug = "e-news";
      $menu = \TCG\Voyager\Models\MenuItem::where('url', "/".$slug)->first();
      $posts = \App\Enews::where('is_active', 'ACTIVE')->orderBy('created_at', 'desc')->paginate(10);
      $newss = \TCG\Voyager\Models\Post::orderBy('created_at', 'desc')->limit('3')->get();
      return view("enews.newslist", ['posts'=>$posts, 'menu'=>$menu, 'newss'=>$newss]);
    }
}
