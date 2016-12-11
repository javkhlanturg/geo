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
    <!-- End Sidebar -->
@include('frontend.footer')

  </section>
  <!-- End Inner Container -->
</section>
<!-- End Container -->
@endsection
