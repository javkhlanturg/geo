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
      <span class="author"><a href="#">Админ</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($bus->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="#"><img src="/storage/{{$bus->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="#">{{$bus->title}}</a></h3>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($bus->created_at))}}</a></span>
        </li>

      </ul>
    </div>
    @endif
    @endforeach
  </article>
  <!-- End Category posts -->

  <!-- Category posts -->
  <article class="six column">
    <h4 class="cat-title"><a href="#">Уул уурхай</a></h4>
    @foreach($uuls as $uul)
    @if($loop->index === 0)
    <div class="post-image">
      <a href="#"><img src="/storage/{{$uul->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title">{{$uul->title}}</h2>
      <div class="post-content">
        <p>{{$uul->excerpt}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">24</a></span>
      <span class="author"><a href="#">Админ</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($uul->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="#"><img src="/storage/{{$uul->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="#">{{$uul->title}}</a></h3>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($uul->created_at))}}</a></span>
        </li>

      </ul>
    </div>
    @endif
    @endforeach
  </article>
  <!-- End Category posts -->
</section>
