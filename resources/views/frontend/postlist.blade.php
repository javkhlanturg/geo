@extends('layouts.app')
@section('css')
<style>
  #top-menu a.active{
    background-color: #000;
  }
</style>
@endsection
@section('content')
<section class="container row clearfix">
  @include('frontend.header')
  <section class="inner-container clearfix">
  			<!-- Content -->
  			<section id="content" class="eight column row pull-left">
  				<h4 class="cat-title mb25">{{$menu->title}}</h4>

  				<!-- Posts -->
  				<section class="row">
  					<!-- Category posts -->
            @foreach($posts as $item)
  					<article class="post six column">
  						<div class="post-image" style="object-fit: cover;">
  							<a href="/{{$menu->url}}/{{$item->id}}"><img src="/storage/{{$item->image}}" alt="" style="height:130px;object-fit: cover;"></a>
  						</div>

  						<div class="post-container">
  							<h2 class="post-title"><a href="{{$menu->url}}/{{$item->id}}">{{$item->title}}</a></h2>
  							<div class="post-content">
  								<p>{{$item->excerpt}}</p>
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
  			<!-- Content -->

  			<!-- Sidebar -->
  			<aside id="sidebar" class="four column pull-right masonry" style="position: relative; height: 1459px;">
  				<ul class="no-bullet">
  					<li class="widget tabs-widget clearfix masonry-brick" style="position: absolute; top: 0px; left: 12px;">
  		        		<ul class="tab-links no-bullet clearfix">
  		        			<li class="active"><a href="#popular-tab">Popular</a></li>
  		        			<li><a href="#recent-tab">Recent</a></li>
  		        			<li><a href="#comments-tab">Comments</a></li>
  		        		</ul>

  		        		<div id="popular-tab">
  		        			<ul>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb1.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 25, 2012</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb2.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 22, 2012</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb3.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 05, 2012</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb4.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 05, 2012</div>
  		        				</li>
  		        			</ul>
  		        		</div>

  		        		<div id="recent-tab">
  		        			<ul>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb5.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 25, 2012</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb6.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 22, 2012</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb7.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 05, 2012</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb8.jpg"></a>
  		        					<h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
  		        					<div class="post-date">March 05, 2012</div>
  		        				</li>
  		        			</ul>
  		        		</div>

  		       			<div id="comments-tab">
  		       				<ul>
  		       					<li>
  		        					<a href="#"><img alt="" src="upload\thumb4.jpg"></a>
  		        					<h3><a href="#">admin says:</a></h3>
  		        					<div class="author-comment">Nice theme, indeed :)</div>
  		        				</li>
  		        				<li>
  		        					<a href="#"><img alt="" src="upload\thumb2.jpg"></a>
  	        						<h3><a href="#">faton says:</a></h3>
  		       						<div class="author-comment">very nice post!</div>
  		       					</li>
  		       					<li>
  		       						<a href="#"><img alt="" src="upload\thumb3.jpg"></a>
  		       						<h3><a href="#">sami says:</a></h3>
  		       						<div class="author-comment">Nice theme I’m gonna use it on my next site. I loved the layout and ...</div>
  		       					</li>
  		       					<li>
  		        					<a href="#"><img alt="" src="upload\thumb1.jpg"></a>
  		        					<h3><a href="#">sami says:</a></h3>
  		        					<div class="author-comment">Nice theme I’m gonna use it on my next site. I loved the layout and ...</div>
  		        				</li>
  		        			</ul>
  		        		</div>
  					</li>
  					<li class="widget widget_social_media clearfix masonry-brick" style="position: absolute; top: 425px; left: 12px;">
  						<h3 class="widget-title">Follow us</h3>
  						<ul class="no-bullet">
  							<li class="twitter">
  								<div class="btn">
  									<a href="https://twitter.com/nextWPthemes" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @nextWPthemes</a>
  									<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Ga51ZqnsCiU.O/m=auth/exm=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNpJI124YwOQHM7So5m4i2ZeouNcg/cb=gapi.loaded_1" async=""></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Ga51ZqnsCiU.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNpJI124YwOQHM7So5m4i2ZeouNcg/cb=gapi.loaded_0" async=""></script><script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js#xfbml=1"></script><script type="text/javascript" async="" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script><script id="twitter-wjs" src="//platform.twitter.com/widgets.js"></script><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  								</div>
  							</li>
  							<li class="google_plus">
  								<div class="btn">
  									<!-- Place this tag where you want the +1 button to render. -->
  									<div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1481440478804" name="I0_1481440478804" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=file%3A%2F%2F&amp;url=file%3A%2F%2F%2FApplications%2FAMPPS%2Fwww%2FGeo%2Fpublic%2Fassets%2Fblog-right-sidebar.htm&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.Ga51ZqnsCiU.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNpJI124YwOQHM7So5m4i2ZeouNcg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1481440478804&amp;parent=file%3A%2F%2F&amp;pfname=&amp;rpctoken=31357489" data-gapiattached="true"></iframe></div><div class="g-plusone" data-size="medium" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>

  									<!-- Place this tag after the last +1 button tag. -->
  									<script type="text/javascript">
  									  (function() {
  										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  										po.src = 'https://apis.google.com/js/plusone.js';
  										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  									  })();
  									</script>
  								</div>
  							</li>
  							<li class="facebook">
  								<div class="btn">
  									<script>(function(d, s, id) {
  									  var js, fjs = d.getElementsByTagName(s)[0];
  									  if (d.getElementById(id)) return;
  									  js = d.createElement(s); js.id = id;
  									  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  									  fjs.parentNode.insertBefore(js, fjs);
  									}(document, 'script', 'facebook-jssdk'));
  									</script>

  									<div class="fb-like" data-href="http://www.nextwpthemes.com/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
  								</div>
  							</li>
  							<li class="pinterest">
  								<div class="btn">
  									<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fthemeforest.net%2Fitem%2Fnext-magazine-responsive-magazine-template%2F2576082&amp;media=http%3A%2F%2F1.s3.envato.com%2Ffiles%2F29793891%2Fscreenshots%2F00_preview.__large_preview.jpg&amp;description=Next+Magazine+-+Responsive+Magazine+Template" class="pin-it-button" count-layout="horizontal"><img alt="Pin It" border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
  								</div>
  							</li>
  						</ul>
  					</li>
  					<li class="widget widget_facebook_box clearfix masonry-brick" style="position: absolute; top: 662px; left: 12px;">
  						<h3 class="widget-title">Find Us On Facebook</h3>
  						<iframe src="http://www.facebook.com/plugins/likebox.php?href=http://facebook.com/psdtuts&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
  					</li>
  					<li class="widget widget_ads_big clearfix masonry-brick" style="position: absolute; top: 985px; left: 12px;">
  						<h3 class="widget-title">Ads Big</h3>
  						<div class="clearfix">
  							<a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="upload\300x250ads.gif"></a>
  						</div>
  					</li>
  					<li class="widget widget_tag_cloud clearfix masonry-brick" style="position: absolute; top: 1300px; left: 12px;">
  						<h3 class="widget-title">Tags</h3>
  						<div class="tagcloud">
  							<a href="#" title="3 topics" style="font-size: 22pt;">business</a>
  							<a href="#" title="1 topic" style="font-size: 8pt;">Computers</a>
  							<a href="#" title="2 topics" style="font-size: 16.4pt;">css</a>
  							<a href="#" title="2 topics" style="font-size: 16.4pt;">design</a>
  							<a href="#" title="2 topics" style="font-size: 16.4pt;">graphics</a>
  							<a href="#" title="1 topic" style="font-size: 8pt;">html</a>
  							<a href="#" title="2 topics" style="font-size: 16.4pt;">jQuery</a>
  							<a href="#" title="2 topics" style="font-size: 16.4pt;">themes</a>
  							<a href="#" title="2 topics" style="font-size: 16.4pt;">Video</a>
  							<a href="#" title="1 topic" style="font-size: 8pt;">video</a>
  							<a href="#" title="1 topic" style="font-size: 8pt;">website</a>
  						</div>
  					</li>
  				</ul>
  			</aside>
  			<!-- End Sidebar -->

  			<!-- Footer -->
        @include('frontend.footer')
  			<!-- End Footer -->
  		</section>
    </section>


      <div class="container">
          <div class="row">
              &nbsp;
          </div>
      </div>
  @endsection
  @section('javascript')
  <script>
    $(document).ready(function(){
      @if($menu)
      $('#menu_{{$menu->id}}').addClass('active');
      $('#menu_12').removeClass('active');
      @endif
    });
  </script>
  @endsection
