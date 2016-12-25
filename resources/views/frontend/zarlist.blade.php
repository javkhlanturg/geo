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
    @foreach($zars as $zar)
    <article class="post">
      <div class="post-container">
        <div class="post-content">

          <h2 class="post-title"><a href="#">{{$zar->title}}</a><span class="date" style="float: right"><a href="#">{{ date('m сарын d, Y H:i',strtotime($zar->created_at))}}</a></span></h2>
               <p>{{$zar->body}}</p>
          <div class="post-meta">
            <span style="font-size:13px">&nbsp; &nbsp;Утас: {{$zar->phone}} &nbsp; &nbsp;</span>&nbsp;
            <span style="font-size:13px"> &nbsp; &nbsp;Цалин: {{$zar->tsalin}}₮ &nbsp; &nbsp;</span>
            <span style="font-size:13px"> &nbsp; &nbsp;Байршил: {{$zar->address}} &nbsp; &nbsp;</span>
            @if($zar->category_id === 1)
            <button class="pull-right order"> Ажилд авна </button>
            @else
            <button class="pull-right order"> Ажил хайж байна </button>
            @endif
          </div>
        </div>
      </div>
    </article>
<hr/>
    @endforeach
    <!-- End Category posts -->
  </section>
  <!-- End Posts -->

  <!-- Pagenation -->
  @if(isset($zars))
  <div class="pagenation clearfix">
    {{ $zars->links() }}
  </div>
  @endif
  <!-- End Pagenation -->
</section>
  @endsection
  @section('javascript')
  <script>
  $(document).ready(function(){
    var data = $('ul.pagination').removeClass().addClass("no-bullet");
  })
  </script>
  @endsection
