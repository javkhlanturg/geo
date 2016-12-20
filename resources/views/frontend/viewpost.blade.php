@extends('layouts.app')

@section('content')
<section id="content" class="eight column row pull-left singlepost">
  <a href="#" class="featured-img"><img src="/{{$post->image}}" alt=""></a>

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
@endsection
