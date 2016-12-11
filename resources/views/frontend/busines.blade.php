<section class="row">
  <!-- Category posts -->
  <article class="six column">
    <h4 class="cat-title"><a href="#">Геологи</a></h4>
    @foreach($business as $bus)
    @if($loop->index === 0)
    <div class="post-image">
      <a href="#"><img src="/storage/{{$bus->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title">{{$bus->title}}</h2>
      <div class="post-content">
        <p>{{$bus->excerpt}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">24</a></span>
      <span class="author"><a href="#">nextwpthemes</a></span>
      <span class="date"><a href="#">13 Jan 2013</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="#"><img src="/storage/{{$bus->image}}" alt=""></a>
          <h3 class="post-title"><a href="#">{{$bus->title}}</a></h3>
          <span class="date"><a href="#">13 Jan 2013</a></span>
        </li>

      </ul>
    </div>
    @endif
    @endforeach
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
