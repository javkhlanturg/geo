<section class="row">
  <!-- Category posts -->
  <article class="six column">
    <h4 class="cat-title"><a href="#">Эдийн засаг</a></h4>
    @foreach($ediins as $ed)
    @if($loop->index === 0)
    <div class="post-image">
      <a href="#"><img src="/storage/{{$ed->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title">{{$ed->title}}</h2>
      <div class="post-content">
        <p>{{$ed->excerpt}}</p>
      </div>
    </div>

    <div class="post-meta">
      <span class="comments"><a href="#">24</a></span>
      <span class="author"><a href="#">Админ</a></span>
      <span class="date"><a href="#">{{ date('Y.m.d',strtotime($ed->created_at))}}</a></span>
    </div>
    @else

    <div class="other-posts">
      <ul class="no-bullet">
        <li>
          <a href="#"><img src="/storage/{{$ed->image}}-small" alt=""></a>
          <h3 class="post-title"><a href="#">{{$ed->title}}</a></h3>
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
      <a href="#"><img src="/storage/{{$tehnology->image}}" alt=""></a>
    </div>

    <div class="post-container">
      <h2 class="post-title">{{$tehnology->title}}</h2>
      <div class="post-content">
        <p>{{$tehnology->excerpt}}</p>
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
          <a href="#"><img src="/storage/{{$tehnology->image}}-small" alt=""></a>
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