<!DOCTYPE html>
<html>
<head>
    <title>{{Voyager::setting('admin_title')}} - {{Voyager::setting('admin_description')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?= csrf_token() ?>"/>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|Lato:300,400,700,900' rel='stylesheet'
          type='text/css'>

    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/lib/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/css/bootstrap-toggle.min.css"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/js/icheck/icheck.css"
          rel="stylesheet">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/css/themes/flat-blue.css">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ config('voyager.assets_path') }}/images/logo-icon.png" type="image/x-icon">

    <!-- CSS Fonts -->
    <link href="{{ config('voyager.assets_path') }}/fonts/voyager/styles.css" rel="stylesheet">
    <script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ config('voyager.assets_path') }}/js/vue.min.js"></script>
    <style>
    .flex-caption { position: absolute; left: 0; bottom: 0; font-size: 13px; padding: 5px 5px; color: #fff; width: 100%; overflow: hidden; background: rgba(0,0,0, 0.5); background: url(http://www.htmltocss.com/rgbatopng.php?rgba=0,0,0,0.5)\0/; }
    .flex-caption .desc {overflow: hidden; }
    .flex-caption a { color: #fc7100; margin-bottom: 7px; font-family: 'PT Sans'; font-size: 18px; line-height: 20px; display: block; }
    .flex-caption p { line-height: 17px; padding:5px }
    </style>
    @yield('css')

    <!-- Voyager CSS -->
    <link rel="stylesheet" href="{{ config('voyager.assets_path') }}/css/voyager.css">

    @yield('head')

</head>

<body class="flat-blue">

<div id="voyager-loader">
    <img src="{{ config('voyager.assets_path') }}/images/logo-icon.png" alt="Voyager Loader">
</div>

<?php
$user_avatar = Voyager::image(Auth::user()->avatar);
if ((substr(Auth::user()->avatar, 0, 7) == 'http://') || (substr(Auth::user()->avatar, 0, 8) == 'https://')) {
    $user_avatar = Auth::user()->avatar;
}
$menuExpanded = isset($_COOKIE['expandedMenu']) && $_COOKIE['expandedMenu'] == 1;
?>

<div class="app-container  expanded  ">
    <div class="row content-container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <ol class="breadcrumb">
                        <li class="active">
                            Гёо уул уурхай, цахим сонин
                        </li>
                    </ol>
                </div>
                <ul class="nav navbar-nav navbar-right">


                    <li class="dropdown profile">
                                    <a href="/user/logout" style="margin-right:20px"> Гарах </a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="side-menu sidebar-inverse">
            <nav class="navbar navbar-default" role="navigation">
                <div class="side-menu-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" style="background:#fc7100">
                            <div class="icon voyager-helm"></div>
                            <div class="title">{{Voyager::setting('admin_title')}}</div>
                        </a>
                        <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                            <i class="voyager-x icon"></i>
                        </button>
                    </div><!-- .navbar-header -->

                    <ul class="nav navbar-nav">
                      <li id="usermenu_1">
                        <a href="/user/dashboard" target="_self">
                          <span class="icon voyager-home"></span>
                          <span class="title">Нүүр</span>
                        </a>
                      </li>
                      <li id="usermenu_2">
                        <a href="/user/news/list" target="_self">
                          <span class="icon voyager-list"></span>
                          <span class="title">Нийт сонин</span>
                        </a>
                      </li>
                      <li id="usermenu_3">
                        <a href="{{route('myNews')}}" target="_self">
                          <span class="icon voyager-data"></span>
                          <span class="title">Захиалсан сонин</span>
                        </a>
                      </li>
                    </ul>
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    @yield('page_header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="app-footer">
    <div class="site-footer-right">
        {{date('Y.m.d')}}
    </div>
</footer>
<!-- Javascript Libs -->

<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/js/jquery.cookie.js"></script>
<!-- Javascript -->

<script type="text/javascript" src="{{ config('voyager.assets_path') }}/js/readmore.min.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/js/app.js"></script>
<script type="text/javascript" src="{{ config('voyager.assets_path') }}/lib/js/toastr.min.js"></script>
<script>
    @if(isset($usermenu))
    $(document).ready(function(){
      $("#{{$usermenu}}").addClass("active");
    });
    @endif
            @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
@yield('javascript')
</body>
</html>
