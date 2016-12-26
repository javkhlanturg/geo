@extends('layouts.app')
@section('css')
<style>
 .order{
   background:#fc7100; color:#fff; border:0px; padding:5px
 }
 .order:hover{
   padding:6px
 }
 .pagenation li span {
     display: block;
     color: #fff;
     font-size: 12px;
     font-weight: bold;
     padding: 4px 11px;
     background-color: #989898;
 }
</style>
@endsection
@section('content')
<section id="content" class="eight column row pull-left">
  <h4 class="cat-title mb25">Ажлын зар
  <a href="{{ url('/jobs/add')}}" style="float: right;">Ажлын зар нэмэх<a></h4>


  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->

      <article class="post twelve column">
      <div class="post-container">
        <div class="post-content">
          <h2 class="post-title" style="font-size:16px;color:#fc7100;">{{$zarshow->title}} <button class="pull-right order"> @if($zarshow->category_id == 1) Ажилд авна @else Ажил хайж байна  @endif </button></h2>
          <hr/>
          <div class="post-meta" style="font-family: arial;font-size: 13px;">
              <span class="date" >&nbsp;{{ date('m сарын d, Y',strtotime($zarshow->created_at)) }}</span>
              <span> &nbsp; &nbsp;Цалин: {{$zarshow->tsalin}}₮ &nbsp; &nbsp;</span>
              <span>&nbsp; &nbsp;Утас: {{$zarshow->phone}} &nbsp; &nbsp;</span>&nbsp;
          </div>
           <p>{{$zarshow->body}}</p>
           <span style="float:right;font-family: arial;font-size: 13px;">&nbsp; &nbsp;Байршил: {{$zarshow->address}} &nbsp; &nbsp;</span>&nbsp;
        </div>
      </div>
    </article>
<hr/>


  </section>
  </section>
@endsection
