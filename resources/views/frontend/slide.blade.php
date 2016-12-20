<div class="flexslider mb25">
  <ul class="slides no-bullet inline-list m0">
    @foreach($top_newss as $news)
    <li>
      <a href="#"><img alt="" src="/{{$news->image}}"></a>
      <div class="flex-caption">
        <div class="desc">
          <h1><a href="#">{{$news->title}}</a></h1>
          <p>{{$news->excerpt}}</p>
          </div>
        </div>
      </li>
      @endforeach
        </ul>
      </div>
