<aside id="sidebar" class="four column pull-right">
   <?php $newss = \TCG\Voyager\Models\Post::limit('5')->get(); ?>
  <ul class="no-bullet">
    <li class="widget tabs-widget clearfix">
      <ul class="tab-links no-bullet clearfix">
        <li class="active"><a href="#popular-tab">Сүүлд нэмэгдсэн мэдээ</a></li>
      </ul>
      <div id="popular-tab">
        <ul>
          @foreach($newss as $news)
          <li>
            <a href="#"><img alt="" src="/storage/{{$news->image}}"></a>
            <h3><a href="#">{{$news->title}}</a></h3>
            <div class="post-date">{{ date('m сарын d, Y',strtotime($news->created_at))}}</div>
          </li>
          @endforeach
        </ul>
      </div>
    </li>

    <li class="widget widget_ads_big clearfix">
      <h3 class="widget-title">Ads Big</h3>
      <div class="clearfix">
        <a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="\assets\upload\300x250ads.gif"></a>
      </div>
    </li>
    <li class="widget widget_facebook_box clearfix">
      <h3 class="widget-title">Find Us On Facebook</h3>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=http://facebook.com/psdtuts&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
    </li>
    <li class="widget widget_video clearfix">
      <h3 class="widget-title">Featured Video</h3>
      <div class="flex-video widescreen">
        <iframe src="http://www.youtube.com/embed/YdaMGcOyfjM" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
      </div>
    </li>
    <li class="widget widget_ads_small clearfix">
      <h3 class="widget-title">Ads Small</h3>
      <ul class="no-bullet clearfix">
        <li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="\assets\upload\150x150ads.gif"></a></li>
        <li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="\assets\upload\150x150ads2.gif"></a></li>
        <li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="\assets\upload\150x150ads2.gif"></a></li>
        <li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="\assets\upload\150x150ads3.gif"></a></li>
      </ul>
    </li>
    <li class="widget widget_social_media clearfix">
      <h3 class="widget-title">Follow us</h3>
      <ul class="no-bullet">
        <li class="twitter">
          <div class="btn">

          </div>
        </li>
        <li class="google_plus">
          <div class="btn">

          </div>
        </li>
        <li class="facebook">
          <div class="btn">

          </div>
        </li>
        <li class="pinterest">
          <div class="btn">

          </div>
        </li>
      </ul>
    </li>

  </ul>
</aside>
