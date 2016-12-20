<aside id="sidebar" class="four column pull-right">
   <?php $newss = \TCG\Voyager\Models\Post::orderBy('created_at')->limit('5')->get(); ?>
  <ul class="no-bullet">
    <li class="widget tabs-widget clearfix">
      <ul class="tab-links no-bullet clearfix">
        <li class="active"><a href="#popular-tab">Сүүлд нэмэгдсэн мэдээ</a></li>
      </ul>
      <div id="popular-tab">
        <ul>
          @foreach($newss as $news)
          <li>
            <a href="{{$news->category['slug']}}/{{$news->id}}"><img alt="" src="/{{$news->image}}"></a>
            <h3><a href="{{$news->category['slug']}}/{{$news->id}}">{{$news->title}}</a></h3>
            <div class="post-date">{{ date('m сарын d, Y',strtotime($news->created_at))}}</div>
          </li>
          @endforeach
        </ul>
      </div>
    </li>

    <li class="widget widget_ads_big clearfix">
      <?php $add_banner = App\Banners::where('id', 5)->first(); ?>
      <span class="add-title"></span>

      <h3 class="widget-title">- Сурталчилгаа -</h3>
      <div class="clearfix">
        <a href="{{$add_banner->url}}"><img src="/{{$add_banner->bannerpath}}" alt=""></a>
      </div>
    </li>
    <li class="widget widget_facebook_box clearfix">
      <h3 class="widget-title">Facebook хуудас</h3>
      {!!Voyager::setting('facebook_page')!!}
    </li>
    <li class="widget widget_video clearfix">
      <h3 class="widget-title">Featured Video</h3>
      <div class="flex-video widescreen">
        <iframe src="http://www.youtube.com/embed/YdaMGcOyfjM" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
      </div>
    </li>

  </ul>
</aside>
