@extends('layouts.app')

@section('content')
<section id="content" class="eight column row pull-left singlepost">
  <h4 class="post-title" style="text-align: center; color:#000">Хэрэглэгч бүртгүүлэх хэсэг</h4>
  <hr/>

  <div class="contact-form">
    <form action="{{route('addRegister')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div id="register">
          <span>Хэрэглэгчийн нэр<input name="name" type="text" placeholder="Хэрэглэгчийн нэр"></span><br/>
          <span>Мэйл хаяг<input name="email" type="text" placeholder="Мэйл хаяг"></span><br/>
          <span>Нууц үг<input name="password" type="password" placeholder="Нууц үг"></span><br/>
          <span>Утасны дугаар<input name="phone" type="text" placeholder="Утасны дугаар"></span><br/>
                <input type="submit" value="Бүртгүүлэх" class="pull-left">
      </div>
    </form>
    <div id="info" class="message"></div>
  </div>
</section>
@endsection
