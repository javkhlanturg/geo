<section class="row">
  <!-- Category posts -->
  <article class="six column">
    <h4 class="cat-title"><a href="#">Эдийн засаг</a></h4>
    @foreach($ediins as $ed)
    @if($loop->index === 0)
    <div class="post-image">
      <a href="/{{$ed->category['slug']}}/{{$ed->id}}"><img src="/{{$ed->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title"><a href="/{{$ed->category['slug']}}/{{$ed->id}}">{{$ed->title}}</a></h2>
      <div class="post-content">
        <p>{{str_limit($ed->excerpt, 150)}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">{{$ed->commentCount()}}</a></span>
      <span class="author"><a href="#">{{$ed->user['name']}}</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($ed->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="/{{$ed->category['slug']}}/{{$ed->id}}"><img src="/{{$ed->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="/{{$ed->category['slug']}}/{{$ed->id}}">{{$ed->title}}</a></h3>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($ed->created_at))}}</a></span>
        </li>

      </ul>
    </div>
    @endif
    @endforeach
  </article>
  <!-- End Category posts -->

  <!-- Category posts -->
  <article class="six column">
    <h4 class="cat-title"><a href="#">Технологи</a></h4>
    @foreach($tehnologys as $tehnology)
    @if($loop->index === 0)
    <div class="post-image">
      <a href="/{{$tehnology->category['slug']}}/{{$tehnology->id}}"><img src="/{{$tehnology->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title"><a href="/{{$tehnology->category['slug']}}/{{$tehnology->id}}">{{$tehnology->title}}</a></h2>
      <div class="post-content">
        <p>{{str_limit($tehnology->excerpt, 150)}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">24</a></span>
      <span class="author"><a href="#">Админ</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($tehnology->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="#"><img src="/{{$tehnology->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="#">{{$tehnology->title}}</a></h3>
          <span class="date"><a href="#">{{ date('Y.m.d',strtotime($tehnology->created_at))}}</a></span>
        </li>

      </ul>
    </div>
    @endif
    @endforeach
  </article>
  <!-- End Category posts -->
</section>
