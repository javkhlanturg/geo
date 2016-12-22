<section class="row">
  <!-- Category posts -->
  <article class="six column">
    <h4 class="cat-title"><a href="#">Геологи</a></h4>
    @foreach($business as $bus)
    @if($loop->index === 0)
    <div class="post-image">
      <a href="/{{$bus->category['slug']}}/{{$bus->id}}"><img src="/{{$bus->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title"><a href="/{{$bus->category['slug']}}/{{$bus->id}}">{{$bus->title}}</a></h2>
      <div class="post-content">
        <p>{{str_limit($bus->excerpt, 200)}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">{{$bus->commentCount()}}</a></span>
      <span class="author"><a href="#">{{$bus->user['name']}}</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($bus->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="/{{$bus->category['slug']}}/{{$bus->id}}"><img src="/{{$bus->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="/{{$bus->category['slug']}}/{{$bus->id}}">{{$bus->title}}</a></h3>
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
      <a href="/{{$uul->category['slug']}}/{{$uul->id}}"><img src="/{{$uul->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title"><a href="/{{$uul->category['slug']}}/{{$uul->id}}">{{$uul->title}}</a></h2>
      <div class="post-content">
        <p>{{str_limit($uul->excerpt, 200)}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">{{$uul->commentCount()}}</a></span>
      <span class="author"><a href="#">{{$uul->user['name']}}</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($uul->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="/{{$uul->category['slug']}}/{{$uul->id}}"><img src="/{{$uul->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="/{{$uul->category['slug']}}/{{$uul->id}}">{{$uul->title}}</a></h3>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($uul->created_at))}}</a></span>
        </li>

      </ul>
    </div>
    @endif
    @endforeach
  </article>
  <!-- End Category posts -->
</section>
