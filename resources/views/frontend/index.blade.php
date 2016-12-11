@extends('layouts.app')

@section('content')





    <section id="content" class="eight column row pull-left">

      @include('frontend.slide',['top_newss'=>$top_newss])


      @include('frontend.busines',['business'=>$business,'uuls'=>$uuls])


      @include('frontend.event',['events'=>$events])

      <div class="ads-middle mb25">
        <a href="#"><img src="\assets\upload\468x60ads.jpg" alt=""></a>
      </div>


      @include('frontend.ediin',['ediins'=>$ediins,'tehnologys'=>$tehnologys])


      @include('frontend.gallery');

    </section>

    @include('frontend.right')

  


@endsection
