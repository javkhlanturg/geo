<div class="clearfix mb10 oh">
  <h4 class="cat-title">Үйл явдал</h4>
  <!-- jCarousel -->
  <div class="carousel-container">
    <div class="carousel-navigation">
      <a class="carousel-prev"></a>
      <a class="carousel-next"></a>
    </div>
    <div class="carousel-item-holder row" data-index="0">
      @foreach($events as $event)
      <div class="four column carousel-item">
        <a href="/{{$event->category['slug']}}/{{$event->id}}"><img src="/{{$event->image  }}" alt=""></a>

        <div class="post-container">
          <h2 class="post-title"><a href="/{{$event->category['slug']}}/{{$event->id}}">{{$event->title}}</a></h2>
          <div class="post-content">
            <p>{{str_limit($event->excerpt, 85)}}</p>
          </div>
        </div>

        <div class="post-meta">
          <span class="comments"><a href="#">{{$event->commentCount()}}</a></span>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($event->created_at))}}</a></span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- End jCarousel -->
</div>
