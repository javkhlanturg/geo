@extends('layouts.app')

@section('content')
<section id="content" class="eight column row pull-left singlepost" style="color: #3c414e; font-size: 14px;">
  <h1 class="post-title">{{$post->title}}</h1>
  <span style="font-size:13px;">{{ date('m сарын d, Y',strtotime($post->created_at))}} - </span><span><b>{{$menu->title}}</b></span>
  <div style="margin-top:10px" class="featured-img"><img src="/{{$post->image}}" alt=""></div>

  <blockquote>{{$post->excerpt}}</blockquote>

  {!! $post->body !!}

  <div class="post-meta">
    <span class="comments"><a href="#">{{$post->commentCount()}}</a></span>
    <span class="author"><a href="#">{{$post->user['name']}}</a></span>
    <span class="date"><a href="#">{{date('d.M.Y', strtotime($post->created_at))}}</a></span>
  </div>
  <div class="clear"></div>

  <div class="line"></div>

  <h4 class="post-title">{{$post->commentCount()}} сэтгэгдэл</h4>

  <br>

  <ol id="comments">
    @foreach($comments as $comment)
      <li>
          <div class="comment-main-level">
              <!-- Avatar -->
              <div class="comment-avatar"><img src="\assets\images\comment-02.jpg" class="img-circle" alt=""></div>
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                  <div class="comment-head">
                      <div class="comment-name"><span>{{date('Y.m.d H:i', strtotime($comment->created_at))}}</span>: <a href="#">{{$comment->username}}</a> </div>
                      @if(1===0)
                      <i class="fa fa-reply"></i>
                      <i class="fa fa-heart"></i>
                      @endif
                  </div>
                  <div class="comment-content">
                      {{$comment->comment}}
                  </div>
              </div>
          </div>
      </li>
    @endforeach
  </ol>
  <!-- End Comments -->

  <div class="line"></div>

  <h4 class="post-title">Сэтгэгдэл үлдээх хэсэг</h4>

  <!-- Contact Form -->
  <div class="contact-form comment cleafix">
    <form action="{{route('addComment')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="postid" value="{{ $post->id }}">
      <input name="username" class="left" type="text" data-value="Name" placeholder="Нэр">
      <textarea name="comment" class="twelve column" placeholder="Сэтгэгдэл" data-value="Comment"></textarea>
      <div id="msg" class="message"></div>
      <input  type="submit" value="Илгээх">
    </form>
  </div>
  <!-- End Contact Form -->
</section>
@endsection
