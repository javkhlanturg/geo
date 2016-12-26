<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Zar;
use App\Business;

class ZarController extends Controller
{
    public function index(){
    $zars = Zar::orderBy('created_at', 'desc')->paginate(30);
    return view('frontend.zarlist')
    ->with('zars',$zars);
    }
    public function jobAdd(){
    return view('frontend.zar');
    }
    public function zarShow(Request $request){
      $id = $request->input('id');
      $zarshow = Zar::find($id);
      return view('frontend.zarshow')
      ->with('zarshow',$zarshow);
    }
    public function busShow(Request $request){
      $id = $request->input('id');
      $busshow = Business::find($id);
      return view('frontend.busShow')
      ->with('busshow',$busshow);
    }
    public function zarAdd(Request $request){
      $title = $request->input('title');
      $body = $request->input('content');
      $category = $request->input('category');
      $address = $request->input('address');
      $tsalin = $request->input('tsalin');
      $phone = $request->input('phone');
      $email = $request->input('email');

      $zar = new Zar();
      $zar->title = $title;
      $zar->body = $body;
      $zar->category_id = $category;
      $zar->address = $address;
      $zar->tsalin = $tsalin;
      $zar->phone = $phone;
      $zar->email = $email;
      $zar->save();
      return redirect('/jobs');
    }

    public function buslist(){
      $buss = Business::orderBy('created_at', 'desc')->paginate(30);
      return view('frontend.buslist')
        ->with('buss',$buss);
    }
    public function busA(){
        return view('frontend.bus');
    }
    public function busAdd(Request $request){
      $title = $request->input('title');
      $body = $request->input('content');
      $imageName = time().'.'.$request->image->getClientOriginalExtension();
      $request->image->move(public_path('bus'), $imageName);
      $address = $request->input('address');
      $phone = $request->input('phone');
      $email = $request->input('email');

      $bus = new Business();

      $bus->title = $title;
      $bus->body = $body;
      $bus->image = $imageName;
      $bus->address = $address;
      $bus->phone = $phone;
      $bus->email = $email;
      $bus->save();
      return redirect('/business-news');
    }
}
