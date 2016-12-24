<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use \App\Enews;
use \App\EnewsRole;
class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard', ['usermenu'=>'usermenu_1']);
    }

    public function readNews($newsid){
      $news = EnewsRole::where('user_id', \Auth::user()->id)->where('news_id', $newsid)->where('status', 1)->first();
      if($news){
        $filename = "Geo_news.pdf";
        return Response::make(file_get_contents(public_path($news->news->newfile)), 200, [
          'Content-Type' => 'application/pdf',
          'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
      }

      return view('enews.readnews', ['news'=>$news]);
    }

    public function allnews(){
      $ids = EnewsRole::where('user_id', \Auth::user()->id)->get();
      $array =array();
      foreach($ids as $id){
          $array = array_prepend($array, $id->news_id);
      }
      $list = Enews::whereNotIn('id', $array)->paginate(9);
      return view('user.newslist', ['list'=>$list, 'usermenu'=>'usermenu_2']);
    }

    public function myNews(){
      $list = EnewsRole::where('user_id', \Auth::user()->id)->get();
      return view('user.mylist', ['list'=>$list, 'usermenu'=>'usermenu_3']);
    }

    public function deleteOrder(Request $request){
      $id = $request->input('orderid');
      $status = EnewsRole::where('id', $id)->delete();
      if($status){
        return back()
                ->with('message', 'Таны захиалга амжилттай цуцаллаа')
                ->with('alert-type', 'success');
      }else{
        return back()
                ->with('message', 'Захиалга цуцлах үед алдаа гарлаа та дахин цуцлана уу')
                ->with('alert-type', 'error');
      }
    }

    public function order(Request $request){
      $newsid = $request->input('newsid');
      $userid = \Auth::user()->id;
      $order = new EnewsRole();
      $order->user_id = $userid;
      $order->news_id = $newsid;
      $status = $order->save();
      if($status){
        return back()
                ->with('message', 'Таны захиалга амжилттай илгээгдлээ')
                ->with('alert-type', 'success');
      }else{
        return back()
                ->with('message', 'Захиалга илгээх үед алдаа гарлаа та дахин илгээнэ үү')
                ->with('alert-type', 'error');
      }
    }
}
