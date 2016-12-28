<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use TCG\Voyager\Models\Page;
use App\Banners;
class PostController extends Controller
{
  public function postList($slug){
      $menu = \TCG\Voyager\Models\MenuItem::where('url', "/".$slug)->first();
      $category = \TCG\Voyager\Models\Category::where('slug', $slug)->first();
      if(!$category){
        abort(404);
      }
      $posts = $category->posts()->paginate(10);
      $newss = \TCG\Voyager\Models\Post::orderBy('created_at', 'desc')->limit('10')->get();
      return view("frontend.postlist", ['posts'=>$posts, 'menu'=>$menu, 'newss'=>$newss]);
  }

  public function post($slug, $postid){
      $menu = \TCG\Voyager\Models\MenuItem::where('url', "/".$slug)->first();
      $category = \TCG\Voyager\Models\Category::where('slug', $slug)->first();
      if(!$category){
        abort(404);
      }
      $post = $category->posts()->where('id', $postid)->first();
      if(!$post){
        abort(404);
      }
      $comments = Comments::where('postid', $post->id)->get();
      $newss = \TCG\Voyager\Models\Post::orderBy('created_at', 'desc')->limit('3')->get();
      return view('frontend.viewpost', ['post'=>$post, 'menu'=>$menu, 'comments'=>$comments, 'newss'=>$newss]);
  }

  public function viewPage($slug){
    $page = Page::where('slug', $slug)->first();
    if(!$page){
      abort(404);
    }
    return view('frontend.pageview',['page'=>$page]);
  }

  public function action(Request $request){
    switch ($request->input('action')) {
      case 'comcust': return $this->comCustList();

      default:
        # code...
        break;
    }
  }

  public function comCustList(){
    $list = Banners::where('banner_position', 'LIKE', 'comcust_%')->orderBy('banner_position','asc')->limit(9)->get();
    $html = view('frontend.comcustitem', ['list'=>$list]);
    return response()->json(['list'=>$html->render()]);
  }
}
