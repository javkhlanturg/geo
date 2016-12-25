@extends('layouts.app')
@section('css')
<style>
 .order{
   background:#fc7100; color:#fff; border:0px; padding:5px
 }
 .order:hover{
   padding:6px
 }
 .pagenation li span {
     display: block;
     color: #fff;
     font-size: 12px;
     font-weight: bold;
     padding: 4px 11px;
     background-color: #989898;
 }
</style>
@endsection
@section('content')
<section id="content" class="eight column row pull-left">
  <h4 class="cat-title mb25">Бизнес зар
  <a href="{{ url('/busA')}}" style="float: right;">Бизнес зар нэмэх<a></h4>


  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->
    @foreach($buss as $bus)
    <article class="post">
      <div class="post-container">
        <div class="post-content">
          @if($bus->image)
          <img src="/bus/{{$bus->image}}" alt="" style="height:130px;width:220px;object-fit: cover;float: left;margin-right:20px">
          @else
          @endif
          <h2 class="post-title"><a href="#">{{$bus->title}}</a><span class="date" style="float: right"><a href="#">{{ date('m сарын d, Y H:i',strtotime($bus->created_at))}}</a></span></h2>
               <p>{{$bus->body}}</p>
          <div class="post-meta">
            <span style="font-size:13px">&nbsp; &nbsp;Утас: {{$bus->phone}} &nbsp; &nbsp;</span>&nbsp;
            <span style="font-size:13px"> &nbsp; &nbsp;Байршил: {{$bus->address}} &nbsp; &nbsp;</span>
          </div>
        </div>
      </div>
    </article>
<hr/>
    @endforeach
    <!-- End Category posts -->
  </section>
  <!-- End Posts -->

  <!-- Pagenation -->
  @if(isset($buss))
  <div class="pagenation clearfix">
    {{ $buss->links() }}
  </div>
  @endif
  <!-- End Pagenation -->
</section>
  @endsection
  @section('javascript')
  <script>
  $(document).ready(function(){
    var data = $('ul.pagination').removeClass().addClass("no-bullet");
  })
  </script>
  @endsection
