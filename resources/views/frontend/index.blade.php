@extends('layouts.app')

@section('content')
<!-- Container -->
<section class="container row clearfix">
  @include('frontend.header')
  <!-- Inner Container -->
  <section class="inner-container clearfix">
    <!-- Content -->
    <section id="content" class="eight column row pull-left">
      <!-- Slider -->
      <div class="flexslider mb25">
        <ul class="slides no-bullet inline-list m0">
          <li>
              <a href="#"><img alt="" src="\assets\upload\slide1.jpg"></a>
              <div class="flex-caption">
                      <div class="desc">
                        <h1><a href="#">Google flexes its Googleplex with planned expansion</a></h1>
                        <p>Lorem quis bibendum auctor Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non

24 nextwpthem This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                      </div>
                  </div>
          </li>
          <li>
            <a href="#"><img alt="" src="\assets\upload\slide2.jpg"></a>
              <div class="flex-caption">
                      <div class="desc">
                        <h1><a href="#">Apple trumps Samsung in smartphone reliability tests</a></h1>
                        <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non

24 nextwpthem</p>
                      </div>
                  </div>
            </li>
            <li>
              <a href="#"><img alt="" src="\assets\upload\slide3.jpg"></a>
              <div class="flex-caption">
                      <div class="desc">
                        <h1><a href="#">Global allies give Mozilla's Firefox OS a mobile foothold</a></h1>
                        <p>Proin gravida nibh vel velit auctor aliquet.Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non

24 nextwpthem Aenean sollicitudin, lorem quis bibendum auctor</p>
                      </div>
                  </div>
          </li>
          <li>
            <a href="#"><img alt="" src="\assets\upload\slide4.jpg"></a>
              <div class="flex-caption">
                      <div class="desc">
                        <h1><a href="#">Star Trek gold shirts more deadly than red shirts 2k Facebook Likes</a></h1>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
                      </div>
                  </div>
            </li>
        </ul>
      </div>
      <!-- End Slider -->

      <section class="row">
        <!-- Category posts -->
        <article class="six column">
          <h4 class="cat-title"><a href="#">Business</a></h4>
          <div class="post-image">
            <a href="#"><img src="\assets\upload\imagepost1.jpg" alt=""></a>
          </div>

          <div class="post-container">
            <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
            <div class="post-content">
              <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
            </div>
          </div>

          <div class="post-meta">
            <span class="comments"><a href="#">24</a></span>
            <span class="author"><a href="#">nextwpthemes</a></span>
            <span class="date"><a href="#">13 Jan 2013</a></span>
          </div>

          <div class="other-posts">
            <ul class="no-bullet">
              <li>
                <a href="#"><img src="\assets\upload\thumb1.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">Check Out the New Recommended Resources on Webdesigntuts+</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb2.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">15 Great Last-Minute Gifts for Web Designers</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb3.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">How to Create an SEO-Friendly URL Structure</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
            </ul>
          </div>
        </article>
        <!-- End Category posts -->

        <!-- Category posts -->
        <article class="six column">
          <h4 class="cat-title"><a href="#">Techology</a></h4>
          <div class="post-image">
            <a href="#"><img src="\assets\upload\imagepost2.jpg" alt=""></a>
          </div>

          <div class="post-container">
            <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
            <div class="post-content">
              <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
            </div>
          </div>

          <div class="post-meta">
            <span class="comments"><a href="#">24</a></span>
            <span class="author"><a href="#">nextwpthemes</a></span>
            <span class="date"><a href="#">13 Jan 2013</a></span>
          </div>

          <div class="other-posts">
            <ul class="no-bullet">
              <li>
                <a href="#"><img src="\assets\upload\thumb4.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">Check Out the New Recommended Resources on Webdesigntuts+</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb5.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">15 Great Last-Minute Gifts for Web Designers</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb6.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">How to Create an SEO-Friendly URL Structure</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
            </ul>
          </div>
        </article>
        <!-- End Category posts -->
      </section>

      <!-- Carousel Posts -->
      <div class="clearfix mb10 oh">
        <h4 class="cat-title">Business</h4>
        <!-- jCarousel -->
        <div class="carousel-container">
          <div class="carousel-navigation">
            <a class="carousel-prev"></a>
            <a class="carousel-next"></a>
          </div>
          <div class="carousel-item-holder row" data-index="0">
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost1.jpg" alt=""></a>

              <div class="post-container">
                <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
                <div class="post-content">
                  <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
                </div>
              </div>

              <div class="post-meta">
                <span class="comments"><a href="#">24</a></span>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </div>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost2.jpg" alt=""></a>

              <div class="post-container">
                <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
                <div class="post-content">
                  <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
                </div>
              </div>

              <div class="post-meta">
                <span class="comments"><a href="#">24</a></span>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </div>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost3.jpg" alt=""></a>

              <div class="post-container">
                <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
                <div class="post-content">
                  <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
                </div>
              </div>

              <div class="post-meta">
                <span class="comments"><a href="#">24</a></span>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </div>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost4.jpg" alt=""></a>

              <div class="post-container">
                <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
                <div class="post-content">
                  <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
                </div>
              </div>

              <div class="post-meta">
                <span class="comments"><a href="#">24</a></span>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </div>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost5.jpg" alt=""></a>

              <div class="post-container">
                <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
                <div class="post-content">
                  <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
                </div>
              </div>

              <div class="post-meta">
                <span class="comments"><a href="#">24</a></span>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </div>
            </div>
          </div>
        </div>
        <!-- End jCarousel -->
      </div>
      <!-- End Carousel Posts -->

      <!-- Ads -->
      <div class="ads-middle mb25">
        <a href="#"><img src="\assets\upload\468x60ads.jpg" alt=""></a>
      </div>
      <!-- Ads -->

      <section class="row">
        <!-- Category posts -->
        <article class="six column">
          <h4 class="cat-title"><a href="#">Business</a></h4>
          <div class="post-image">
            <a href="#"><img src="\assets\upload\imagepost4.jpg" alt=""></a>
          </div>

          <div class="post-container">
            <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
            <div class="post-content">
              <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
            </div>
          </div>

          <div class="post-meta">
            <span class="comments"><a href="#">24</a></span>
            <span class="author"><a href="#">nextwpthemes</a></span>
            <span class="date"><a href="#">13 Jan 2013</a></span>
          </div>

          <div class="other-posts">
            <ul class="no-bullet">
              <li>
                <a href="#"><img src="\assets\upload\thumb7.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">Check Out the New Recommended Resources on Webdesigntuts+</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb8.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">15 Great Last-Minute Gifts for Web Designers</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb1.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">How to Create an SEO-Friendly URL Structure</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
            </ul>
          </div>
        </article>
        <!-- End Category posts -->

        <!-- Category posts -->
        <article class="six column">
          <h4 class="cat-title"><a href="#">Techology</a></h4>
          <div class="post-image">
            <a href="#"><img src="\assets\upload\imagepost3.jpg" alt=""></a>
          </div>

          <div class="post-container">
            <h2 class="post-title">Create a Flexible Folded Paper Effect Using CSS3 Features</h2>
            <div class="post-content">
              <p>Venenatis volutpat orci, ut sodales augue tempor nec. Integer tempus ullamcorper felis eget dipiscing. Maecenas orci justo, mollis at tempus ac, gravida non</p>
            </div>
          </div>

          <div class="post-meta">
            <span class="comments"><a href="#">24</a></span>
            <span class="author"><a href="#">nextwpthemes</a></span>
            <span class="date"><a href="#">13 Jan 2013</a></span>
          </div>

          <div class="other-posts">
            <ul class="no-bullet">
              <li>
                <a href="#"><img src="\assets\upload\thumb1.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">Check Out the New Recommended Resources on Webdesigntuts+</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb2.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">15 Great Last-Minute Gifts for Web Designers</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
              <li>
                <a href="#"><img src="\assets\upload\thumb3.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">How to Create an SEO-Friendly URL Structure</a></h3>
                <span class="date"><a href="#">13 Jan 2013</a></span>
              </li>
            </ul>
          </div>
        </article>
        <!-- End Category posts -->
      </section>

      <!-- Gallery Posts -->
      <div class="clearfix mb25 oh">
        <h4 class="cat-title">Gallery</h4>
        <!-- jCarousel -->
        <div class="carousel-container">
          <div class="carousel-navigation">
            <a class="carousel-prev"></a>
            <a class="carousel-next"></a>
          </div>
          <div class="carousel-item-holder gallery row" data-index="0">
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost5.jpg" alt=""></a>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost1.jpg" alt=""></a>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost2.jpg" alt=""></a>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost3.jpg" alt=""></a>
            </div>
            <div class="four column carousel-item">
              <a href="#"><img src="\assets\upload\carouselpost4.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <!-- End jCarousel -->
      </div>
      <!-- End Gallery Posts -->
    </section>
    <!-- Content -->

    <!-- Sidebar -->
    <aside id="sidebar" class="four column pull-right">
      <ul class="no-bullet">
        <li class="widget tabs-widget clearfix">
              <ul class="tab-links no-bullet clearfix">
                <li class="active"><a href="#popular-tab">Popular</a></li>
                <li><a href="#recent-tab">Recent</a></li>
                <li><a href="#comments-tab">Comments</a></li>
              </ul>

              <div id="popular-tab">
                <ul>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb1.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 25, 2012</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb2.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 22, 2012</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb3.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 05, 2012</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb4.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 05, 2012</div>
                  </li>
                </ul>
              </div>

              <div id="recent-tab">
                <ul>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb5.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 25, 2012</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb6.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 22, 2012</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb7.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 05, 2012</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb8.jpg"></a>
                    <h3><a href="#">Dictum ipsum vel laoreet. Sed convallis quam ut elit</a></h3>
                    <div class="post-date">March 05, 2012</div>
                  </li>
                </ul>
              </div>

              <div id="comments-tab">
                <ul>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb1.jpg"></a>
                    <h3><a href="#">admin says:</a></h3>
                    <div class="author-comment">Nice theme, indeed :)</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb2.jpg"></a>
                    <h3><a href="#">faton says:</a></h3>
                    <div class="author-comment">very nice post!</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb3.jpg"></a>
                    <h3><a href="#">sami says:</a></h3>
                    <div class="author-comment">Nice theme I’m gonna use it on my next site. I loved the layout and ...</div>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="\assets\upload\thumb4.jpg"></a>
                    <h3><a href="#">sami says:</a></h3>
                    <div class="author-comment">Nice theme I’m gonna use it on my next site. I loved the layout and ...</div>
                  </li>
                </ul>
              </div>
        </li>
        <li class="widget subscribe-widget clearfix">
          <h3 class="widget-title">Subscribe via email</h3>
          <form>
            <input type="text" data-value="Enter your email address" value="Enter your email address">
            <input type="submit" value="Submit">
          </form>
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
                <a href="https://twitter.com/nextWPthemes" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @nextWPthemes</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </div>
            </li>
            <li class="google_plus">
              <div class="btn">
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="medium"></div>

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
        <li class="widget widget_tag_cloud clearfix">
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
@include('frontend.footer')

  </section>
  <!-- End Inner Container -->
</section>
<!-- End Container -->
@endsection
