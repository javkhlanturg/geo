<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Геологи, Уул уурхай мэдээ сонин</title>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="\assets\css\foundation.css" type="text/css" media="screen">
	<link rel="stylesheet" href="\assets\css\style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="\assets\css\responsive.css" type="text/css" media="screen">
	<style>
	  #top-menu a.active{
	    background-color: #000;
	  }
	</style>
	@yield('css')
</head>
<body>
	<!-- Header -->
	<header class="clearfix">
		<!-- Top Menu -->
		<nav id="top-menu" class="clearfix">
       <?php $menus = \TCG\Voyager\Models\MenuItem::where('menu_id', 4)->get(); ?>
			<ul class="no-bullet inline-list m0">
        @foreach($menus as $menu)
				<li><a id="menu_{{$menu->menu_id}}_{{$menu->id}}" href="{{$menu->url}}">{{$menu->title}}</a></li>
			  @endforeach
				<li id="right"><a href="">Бүртгүүлэх</a></li>
				<li id="right"><a href="">Нэвтрэх</a></li>
			</ul>
		</nav>

		<!-- End Top Menu -->

		<div class="inner-header clearfix">
			<div id="logo" class="left">
				<?php $logo = App\Banners::where('id', 3)->first(); ?>
				<h1><a href="/"><img alt="" src="/storage/{{$logo->bannerpath}}"></a></h1>
			</div>

			<div class="ads-728x90 right">
				<?php $top_banner = App\Banners::where('id', 2)->first(); ?>
				<a href="#"><img alt="" src="/storage/{{$top_banner->bannerpath}}"></a>
			</div>
		</div>
	</header>
	<!-- End Header -->
  <section class="container row clearfix">

    @include('frontend.header')
      <section class="inner-container clearfix">
	@yield('content')
      @include('frontend.right')
  @include('frontend.footer')
</section>
</section>
	<script type="text/javascript" src="\assets\js\jquery.min.js"></script>
	<script type="text/javascript" src="\assets\js\jquery.superfish.js"></script>
	<script type="text/javascript" src="\assets\js\jquery.flexslider.min.js"></script>
	<script type="text/javascript" src="\assets\js\jquery.fancybox.js"></script>
	<script type="text/javascript" src="\assets\js\jcarousel.js"></script>
	<script type="text/javascript" src="\assets\js\jquery.masonry.min.js"></script>
	<script type="text/javascript" src="\assets\js\script.js"></script>
	<script>
    $(document).ready(function(){
      @if($menu)
      $('#menu_{{$menu->menu_id}}_{{$menu->id}}').addClass('active');
      @endif
    });
  </script>
	@yield('javascript')
</body>
</html>
