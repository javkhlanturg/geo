@extends('layouts.app')
@section('content')
<section id="content" class="eight column row pull-left singlepost" style="color: #3c414e; font-size: 14px;">
  <div class="line"></div>
  <h1 class="post-title">{{$page->title}}</h1>
  {!! $page->body !!}
  <div class="clear"></div>

  <br>
  <!-- End Comments -->

  <div class="line"></div>
</section>
@endsection
