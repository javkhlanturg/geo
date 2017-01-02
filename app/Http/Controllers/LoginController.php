<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\ChangePassword;
use App\UserToken;
use TCG\Voyager\Models\User;
class LoginController extends Controller
{
  use AuthenticatesUsers;
    public function index(){
      if ( isset(\Auth::user()->id) and \Auth::user()->id) {
          return redirect('/user/dashboard');
      }
      return view('user.login');
    }
    //postlogin
    public function login(Request $request){
      $this->validateLogin($request);

      // If the class is using the ThrottlesLogins trait, we can automatically throttle
      // the login attempts for this application. We'll key this by the username and
      // the IP address of the client making these requests into this application.
      if ($this->hasTooManyLoginAttempts($request)) {
          $this->fireLockoutEvent($request);

          return $this->sendLockoutResponse($request);
      }

      $credentials = $this->credentials($request);

      if ($this->guard()->attempt($credentials, $request->has('remember'))) {
          return $this->sendLoginResponse($request);
      }

      // If the login attempt was unsuccessful we will increment the number of attempts
      // to login and redirect the user back to the login form. Of course, when this
      // user surpasses their maximum number of attempts they will get locked out.
      $this->incrementLoginAttempts($request);

      return $this->sendFailedLoginResponse($request);
    }

    public function redirectPath()
    {
        return route('userDashboard');
    }

    public function logout(){
      Auth::logout();
      return redirect('/login');
    }

    public function sendChangePassMail(Request $request){

      $user = User::where('email', $request->input('useremail'))->first();

      if($user){
        UserToken::where('email', $user->email)->delete();
         $token = new UserToken();
         $token->email = $user->email;
         $token->token = str_random(40);
         $token->created_at = new \DateTime();
         $token->save();
          \Mail::to($user->email)->send(new ChangePassword($token));
          return back()->with('status','success')->with('message', 'Таны нууц үг солих хаягийг '.$user->email.' хаяг уруу илгээлээ.');
      }

      return back()->with('status','warning')->with('message', 'Уучлаарай та имэйл хаягаа шалгаад дахин илгээнэ үү.');
    }

    public function changePassView($token){
      return view('user.changepass', ['token'=>$token]);
    }

    public function savePass(Request $request){
      $token = $request->input('token');
      $usertoken = UserToken::where('token', $token)->first();
      if($request->input('password') !== $request->input('repassword')){
        return back()->with('status','warning')->with('message', 'Дахин нууц үг буруу байна.');
      }

      if($usertoken){
        $user = User::where('email', $usertoken->email)->first();
        $user->password = \Hash::make($request->input('password'));
        $user->save();
        return redirect()->route('login')->with('status', 'success')->with('message', 'Таны нууц үг амжилттай хадгалагдлаа');
      }
      return back()->with('status','warning')->with('message', 'Нууц үг сэргээх хаяг устсан байна.');
    }
}
