@extends('layouts.app')

@section('content')





    <section id="content" class="eight column row pull-left">

      @include('frontend.slide',['top_newss'=>$top_newss])


      @include('frontend.busines',['business'=>$business,'uuls'=>$uuls])


      @include('frontend.event',['events'=>$events])

      <div class="ads-middle mb25" style="padding:0px">
        <?php $center_banner = App\Banners::where('id', 6)->first(); ?>
				<a href="#"><img alt="" src="/{{$center_banner->bannerpath}}"></a>
      </div>


      @include('frontend.ediin',['ediins'=>$ediins,'tehnologys'=>$tehnologys])


      @include('frontend.gallery');

    </section>






@endsection
