<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Enews;
use \App\EnewsRole;
class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }

    public function allnews(){
      $ids = EnewsRole::where('user_id', \Auth::user()->id)->get();
      $array =array();
      foreach($ids as $id){
          $array = array_prepend($array, $id->news_id);
      }
      $list = Enews::whereNotIn('id', $array)->paginate(10);
      return view('user.newslist', ['list'=>$list]);
    }

    public function myNews(){
      $list = EnewsRole::where('user_id', \Auth::user()->id)->get();
      return view('user.mylist', ['list'=>$list]);
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
