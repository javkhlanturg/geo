@extends('layouts.app')

@section('content')
<section id="content" class="eight column row pull-left singlepost">
  <h4 class="post-title" style="text-align: center; color:#000">Хэрэглэгч бүртгүүлэх хэсэг</h4>
  <hr/>

  <div class="contact-form">
    <form action="{{route('addComment')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div id="register">
          <span>Хэрэглэгчийн нэр<input name="username" type="text" placeholder="Хэрэглэгчийн нэр"></span>
          <span>Мэйл хаяг<input name="username" type="text" placeholder="Мэйл хаяг"></span>
          <span>Нууц үг<input name="username" type="text" placeholder="Нууц үг"></span>
          <span>Утасны дугаар<input name="username" type="text" placeholder="Утасны дугаар"></span>
      </div>
      <input type="submit" value="Бүртгүүлэх">
    </form>
    <div id="msg" class="message"></div>
  </div>
</section>
@endsection
