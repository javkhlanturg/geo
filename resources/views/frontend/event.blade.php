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
        <a href="#"><img src="/{{$event->image  }}" alt=""></a>

        <div class="post-container">
          <h2 class="post-title">{{$event->title}}</h2>
          <div class="post-content">
            <p>{{$event->excerpt}}</p>
          </div>
        </div>

        <div class="post-meta">
          <span class="comments"><a href="#">24</a></span>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($event->created_at))}}</a></span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- End jCarousel -->
</div>
