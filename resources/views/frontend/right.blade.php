<aside id="sidebar" class="four column pull-right">
   <?php $newss = \TCG\Voyager\Models\Post::orderBy('created_at', 'desc')->limit('5')->get(); ?>
  <ul class="no-bullet">
    <li class="widget tabs-widget clearfix">
      <ul class="tab-links no-bullet clearfix">
        <li class="active"><a href="#popular-tab">Сүүлд нэмэгдсэн мэдээ</a></li>
      </ul>
      <div id="popular-tab">
        <ul>
          @foreach($newss as $news)
          <li>
            <a href="/{{$news->category['slug']}}/{{$news->id}}"><img alt="" src="/{{$news->image}}" style="width:100px;object-fit: cover;float: left;margin-right:20px"></a>
            <h3><a href="/{{$news->category['slug']}}/{{$news->id}}">{{$news->title}}</a></h3>
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
        <a href="/{{$add_banner->url}}"><img src="/{{$add_banner->bannerpath}}" alt=""></a>
      </div>
    </li>
    <li class="widget widget_facebook_box clearfix">
      <h3 class="widget-title">Facebook хуудас</h3>
      {!!Voyager::setting('facebook_page')!!}
    </li>

    <li class="widget widget_ads_small clearfix masonry-brick" style="position: absolute; top: 750px; left: 12px;">
						<h3 class="widget-title">Ads Small</h3>
            <?php $logo_left_top = App\Banners::where('id', 7)->first(); ?>
            <?php $logo_right_top = App\Banners::where('id', 8)->first(); ?>
            <?php $logo_left_bottom = App\Banners::where('id', 9)->first(); ?>
            <?php $logo_right_bottom = App\Banners::where('id', 10)->first(); ?>
						<ul class="no-bullet clearfix">
							<li><a href="/{{$logo_left_top->url}}"><img alt="" src="/{{$logo_left_top->bannerpath}}"></a></li>
							<li><a href="/{{$logo_left_top->url}}"><img alt="" src="/{{$logo_right_top->bannerpath}}"></a></li>
							<li><a href="/{{$logo_left_bottom->url}}"><img alt="" src="/{{$logo_left_bottom->bannerpath}}"></a></li>
							<li><a href="/{{$logo_right_bottom->url}}"><img alt="" src="/{{$logo_right_bottom->bannerpath}}"></a></li>
						</ul>
					</li>
          <li class="widget tabs-widget clearfix">
            <ul class="tab-links no-bullet clearfix">
              <li class="active">
                <a href="{{ url('/zar') }}">Шинэ зар</a>
              </li>
            </ul>
             <?php $zars = App\Zar::orderBy('created_at', 'desc')->limit('5')->get(); ?>
            <div id="popular-tab">
              <ul>
                @foreach($zars as $zar)
                <li>
                  <h3><a href="#">{{$zar->title}}</a></h3>
                  <div class="content">{{$zar->body}}</div>
                  <div class="email">{{$zar->email}}</div>
                  <div class="phone">{{$zar->phone}}</div>
                </li></hr>
                @endforeach
              </ul>
            </div>
          </li>

  </ul>
</aside>
