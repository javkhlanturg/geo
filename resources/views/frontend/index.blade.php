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
      @include('frontend.slide',['top_newss'=>$top_newss])
            <!-- End Slider -->

      @include('frontend.busines',['business'=>$business,'uuls'=>$uuls])

            <!-- Carousel Posts -->
            @include('frontend.event',['events'=>$events])
            <!-- End Carousel Posts -->

            <!-- Ads -->
            <div class="ads-middle mb25">
              <a href="#"><img src="\assets\upload\468x60ads.jpg" alt=""></a>
            </div>
            <!-- Ads -->

            @include('frontend.ediin',['ediins'=>$ediins,'tehnologys'=>$tehnologys])

            <!-- Gallery Posts -->
            @include('frontend.gallery');
            <!-- End Gallery Posts -->
          </section>
          <!-- Content -->

          <!-- Sidebar -->
          @include('frontend.right')
          <!-- End Sidebar -->
          @include('frontend.footer')
        </section>
        <!-- End Inner Container -->
      </section>
      <!-- End Container -->
      @endsection
