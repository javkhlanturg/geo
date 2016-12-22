@extends('layouts.app')
@section('content')
<section id="content" class="eight column row pull-left">
  <h4 class="cat-title mb25">{{$menu->title}}</h4>

  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->
    @foreach($posts as $item)
    <article class="post six column">
      <div class="post-image" style="object-fit: cover;">
        <a href="/{{$menu->url}}/{{$item->id}}"><img src="/{{$item->image}}" alt="" style="height:130px;object-fit: cover;"></a>
      </div>

      <div class="post-container">
        <h2 class="post-title"><a href="{{$menu->url}}/{{$item->id}}">{{$item->title}}</a></h2>
        <div class="post-content">
          <p>{{str_limit($item->excerpt, 150)}}</p>
        </div>
      </div>

      <div class="post-meta">
        <span class="comments"><a href="#">{{$item->commentCount()}}</a></span>
        <span class="author"><a href="#">{{$item->user['name']}}</a></span>
        <span class="date"><a href="#">{{date('d.M.Y', strtotime($item->created_at))}}</a></span>
      </div>
    </article>
    @endforeach

    <!-- End Category posts -->
  </section>
  <!-- End Posts -->

  <!-- Pagenation -->
  <div class="pagenation clearfix">
    {{ $posts->links() }}
  </div>
  <!-- End Pagenation -->
</section>
  @endsection
