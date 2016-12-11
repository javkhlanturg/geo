<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index(){
    $top_newss = \TCG\Voyager\Models\Post::where('featured', 1)->limit('10')->get();
    $business = \TCG\Voyager\Models\Post::where('category_id', 5)->limit('4')->get();
    $uuls = \TCG\Voyager\Models\Post::where('category_id', 6)->limit('4')->get();
    $ediins = \TCG\Voyager\Models\Post::where('category_id', 7)->limit('4')->get();
    $tehnologys = \TCG\Voyager\Models\Post::where('category_id', 9)->limit('4')->get();
    $events = \TCG\Voyager\Models\Post::where('category_id', 13)->limit('20')->get();
    return view('frontend.index')
    ->with('top_newss',$top_newss)
    ->with('business',$business)
    ->with('uuls',$uuls)
    ->with('events',$events)
    ->with('ediins',$ediins)
    ->with('tehnologys',$tehnologys);
  }

}
