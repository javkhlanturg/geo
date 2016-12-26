@extends('layouts.app')

@section('content')
<section id="content" class="eight column row pull-left">
  <h4 class="cat-title mb25">Ажлын зар
  <a href="{{ url('/jobs/add')}}" style="float: right;">Ажлын зар нэмэх<a></h4>


  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->

      <article class="post twelve column">
      <div class="post-container">
        <div class="post-content">

          <h2 class="post-title"><a href="#">tets</a><span class="date" style="float: right"><a href="#">2016.05.23</a></span></h2>
               <p>dsfsfdsfdsfsdfsdfsdfds</p>
          <div class="post-meta">
              <span style="font-size:13px;">&nbsp; &nbsp;Төрөл:  Ажилд авна Ажил хайж байна  &nbsp; &nbsp;</span>&nbsp;
            <span style="font-size:13px"> &nbsp; &nbsp;Цалин: 5704424₮ &nbsp; &nbsp;</span>
            <span style="font-size:13px">&nbsp; &nbsp;Утас: 9970454 &nbsp; &nbsp;</span>&nbsp;
            <button class="pull-right order"> Бзд 8-р хороооөба өбаөб </button>
          </div>
        </div>
      </div>
    </article>
<hr/>


  </section>
  </section>
@endsection
