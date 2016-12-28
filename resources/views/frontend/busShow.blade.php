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
  <h4 class="cat-title mb25">Бизнес зар
  <a href="{{ url('/busA')}}" style="float: right;">Бизнес зар нэмэх<a></h4>


  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->

      <article class="post twelve column">
      <div class="post-container">
        <div class="post-content">
          <h2 class="post-title" style="font-size:16px;color:#fc7100;">{{$busshow->title}} <span class="date" style="float:right;">&nbsp;{{ date('m сарын d, Y',strtotime($busshow->created_at)) }}</span></h2>
          <hr/>

          <div class="post-meta" style="display: initial;font-family:arial;color: black;font-size: 16px;">
            <img src="/bus/{{$busshow->image}}" style="float: left;width: 50%;" />
              <span> &nbsp; &nbsp;Мэйл: {{$busshow->email}} &nbsp; &nbsp;</span><br/><br/>
              <span>&nbsp; &nbsp;Утас: {{$busshow->phone}} &nbsp; &nbsp;</span><br/><br/>
               <span>&nbsp; &nbsp;{{$busshow->body}}  &nbsp; &nbsp;</span><br/><br/>
               <span style="float:right;font-family: arial;font-size: 16px;">&nbsp; &nbsp;Байршил: {{$busshow->address}} &nbsp; &nbsp;</span>
          </div>


        </div>
      </div>
    </article>
<hr/>


  </section>

  <div class="pagenation clearfix">

  </div>

  </section>
@endsection
@section('javascript')
<script>
$(document).ready(function(){
  var data = $('ul.pagination').removeClass().addClass("no-bullet");
})
</script>
@endsection
