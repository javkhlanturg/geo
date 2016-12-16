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
  <h4 class="cat-title mb25">{{$menu->title}}</h4>

  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->
    @foreach($posts as $post)
    <article class="post">
      <div class="post-container">
        <div class="post-content">
          <img src="/storage/posts/December2016/snHsVHhZB5p7bHAI4EeF.jpg" alt="" style="height:130px;width:220px;object-fit: cover;float: left;margin-right:20px">
          <h2 class="post-title"><a href="#">{{$post->newstitle}}</a></h2>
          <p>{{$post->excerpt}}</p>
          <div class="post-meta">
            <span class="date"><a href="#">{{ date('m сарын d, Y',strtotime($post->created_at))}}</a></span>&nbsp;
            <span style="font-size:13px"> &nbsp; &nbsp;Үнэ: {{number_format($post->price, 2)}}₮ &nbsp; &nbsp;</span>
            <button class="pull-right order"> Захиалах </button>
          </div>
        </div>
      </div>

    </article>
    @endforeach
    <!-- End Category posts -->
  </section>
  <!-- End Posts -->

  <!-- Pagenation -->
  @if(isset($posts))
  <div class="pagenation clearfix">
    {{ $posts->links() }}
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
