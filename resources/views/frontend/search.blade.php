@extends('layouts.app')
@section('content')
<section id="content" class="eight column row pull-left">

  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->
    @if(sizeof($posts) === 0)
    <h4 style="text-align:center"><i>Хайлт илэрцгүй байна.</i></h4>
    @endif
    @foreach($posts as $item)
      <div class="post-container">
        <h2 class="post-title"><a href="{{$item->url}}">{{$item->title}}</a></h2>
        <div class="post-content">
          <p>{!!str_limit($item->body, 150)!!}</p>
        </div>
      </div>
    @endforeach

    <!-- End Category posts -->
  </section>
  <!-- End Posts -->

  <!-- Pagenation -->
  <!-- End Pagenation -->
</section>
  @endsection
