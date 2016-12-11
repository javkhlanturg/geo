<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index(){
    $top_newss = \TCG\Voyager\Models\Post::where('featured', 1)->limit('10')->get();
    $business = \TCG\Voyager\Models\Post::where('category_id', 2)->limit('4')->get();
    return view('frontend.index')
    ->with('top_newss',$top_newss)
    ->with('business',$business);
  }

}
