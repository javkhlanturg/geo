@extends('layouts.app')

@section('content')

<section class="container row clearfix">
  @include('frontend.header')
  <section class="inner-container clearfix">
			<!-- Content -->
			<section id="content" class="eight column row pull-left singlepost">
				<a href="#" class="featured-img"><img src="/storage/{{$post->image}}" alt=""></a>

				<h1 class="post-title">{{$post->title}}</h1>

				<blockquote>{{$post->excerpt}}</blockquote>

				{!! $post->body !!}

				<div class="post-meta">
					<span class="comments"><a href="#">{{$post->commentCount()}}</a></span>
					<span class="author"><a href="#">{{$post->user['name']}}</a></span>
					<span class="date"><a href="#">{{date('d.M.Y', strtotime($post->created_at))}}</a></span>
				</div>

				<div class="social-media clearfix">
					<ul>
						<li class="twitter">
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.nextwpthemes.com/" data-text="">Tweet</a>
							<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Ga51ZqnsCiU.O/m=auth/exm=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNpJI124YwOQHM7So5m4i2ZeouNcg/cb=gapi.loaded_1" async=""></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Ga51ZqnsCiU.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNpJI124YwOQHM7So5m4i2ZeouNcg/cb=gapi.loaded_0" async=""></script><script type="text/javascript" async="" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js#xfbml=1"></script><script id="twitter-wjs" src="//platform.twitter.com/widgets.js"></script><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</li>
						<li class="facebook">
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
							</script>

							<div class="fb-like" data-href="http://www.nextwpthemes.com/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
						</li>
						<li class="google_plus">
							<!-- Place this tag where you want the +1 button to render. -->
							<div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1481443677835" name="I0_1481443677835" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=file%3A%2F%2F&amp;url=file%3A%2F%2F%2FApplications%2FAMPPS%2Fwww%2FGeo%2Fpublic%2Fassets%2Fsinglepost-right-sidebar.htm&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.Ga51ZqnsCiU.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNpJI124YwOQHM7So5m4i2ZeouNcg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1481443677835&amp;parent=file%3A%2F%2F&amp;pfname=&amp;rpctoken=41489007" data-gapiattached="true"></iframe></div><div class="g-plusone" data-size="medium" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>

							<!-- Place this tag after the last +1 button tag. -->
							<script type="text/javascript">
							  (function() {
								var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								po.src = 'https://apis.google.com/js/plusone.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script>
						</li>
					</ul>
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
                            <h6 class="comment-name"><a href="#">{{$comment->username}}</a></h6>
                            <span>{{date('Y.m.d H:i', strtotime($comment->created_at))}}</span>
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
			<!-- Content -->

			<!-- Sidebar -->
			<aside id="sidebar" class="four column pull-right masonry" style="position: relative; height: 1261px;">
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
		        					<a href="#"><img alt="" src="upload\thumb1.jpg"></a>
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
		        					<a href="#"><img alt="" src="upload\thumb5.jpg"></a>
		        					<h3><a href="#">sami says:</a></h3>
		        					<div class="author-comment">Nice theme I’m gonna use it on my next site. I loved the layout and ...</div>
		        				</li>
		        			</ul>
		        		</div>
					</li>
					<li class="widget widget_facebook_box clearfix masonry-brick" style="position: absolute; top: 425px; left: 12px;">
						<h3 class="widget-title">Find Us On Facebook</h3>
						<iframe src="http://www.facebook.com/plugins/likebox.php?href=http://facebook.com/psdtuts&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
					</li>
					<li class="widget widget_ads_small clearfix masonry-brick" style="position: absolute; top: 748px; left: 12px;">
						<h3 class="widget-title">Ads Small</h3>
						<ul class="no-bullet clearfix">
							<li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="upload\150x150ads.gif"></a></li>
							<li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="upload\150x150ads2.gif"></a></li>
							<li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="upload\150x150ads3.gif"></a></li>
							<li><a href="http://themeforest.net/user/nextWPthemes/portfolio?ref=nextWPThemes"><img alt="" src="upload\150x150ads4.gif"></a></li>
						</ul>
					</li>
					<li class="widget widget_tag_cloud clearfix masonry-brick" style="position: absolute; top: 1102px; left: 12px;">
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
			<footer class="row clearfix">
				<!-- Footer widgets -->
				<ul class="no-bullet clearfix">
					<li class="widget four column">
						<h3 class="widget-title">About Us</h3>
			        	<div class="textwidget">
			        		<p>Lorem ipsum dolor sit amet, consec tetuer adipis cing elitraesent vestibulum molestie um sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusmus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec luctus lorem aecenas tristique orci ac semuis ultricies pharetra onec accumsan malesuada orci. Fusce feugiat males odio. Morbi nunc odio, lorem aecenas tristique orci ac semuis ultricies...</p>
			       		</div>
					</li>
					<li class="widget four column">
						<h3 class="widget-title">Flicker Gallery</h3>
	        			<div class="flickr-widget">
	        				<ul class="block-grid four-up">
	        						<li><a href="#"><img src="upload\thumb1.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb2.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb3.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb4.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb5.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb6.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb7.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb8.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb5.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb4.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb2.jpg" alt=""></a></li>
	        						<li><a href="#"><img src="upload\thumb3.jpg" alt=""></a></li>
	        				</ul>
	        			</div>
					</li>
					<li class="widget four column">
						<h3 class="widget-title">Twitter</h3>
			        	<div class="twitter-widget">
			        		<ul>
			        			<li>
			        				<p><a href="#">about 25 days ago</a> Lorem ipsum dolor sit amet nulla malesuda odio morbi nunc odio tristique: <br><a href="#">http://bit.ly/8b0wO4</a></p>
			        			</li>
			        			<li>
			        				<p><a href="#">about 32 days ago</a> Malesuda orci ultricies pharetra onec accimsan curcus nec lorem aecenas: <br><a href="#">http://bit.ly/8b0wO4</a></p>
			        			</li>
			        			<li>
			        				<p><a href="#">about 59 days ago</a> Socis vestibulum cing molestie malesuada odio onces accussam orci lorem: <br><a href="#">http://bit.ly/8b0wO4</a></p>
			        			</li>
			        		</ul>
			        	</div>
					</li>
				</ul>
				<!-- End Footer widgets -->

				<div class="copyright clearfix">
					© Copyright 2012 Pixelogic
				</div>

				<div id="back-to-top" class="right">
					<a href="#top">Back to Top</a>
				</div>
			</footer>
			<!-- End Footer -->
		</section>
</section>
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
