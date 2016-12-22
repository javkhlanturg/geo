 <?php $sub_menus = \TCG\Voyager\Models\MenuItem::where('menu_id', 2)->get(); ?>
<header class="clearfix">
  <nav id="main-menu" class="left navigation">
    <ul class="sf-menu no-bullet inline-list m0">
        @foreach($sub_menus as $_menu)
        @if(isset($menu) and $menu->id===$_menu->id)
        <li><a class="active" href="{{$_menu->url}}" >{{$_menu->title}}</a></li>
        @else
        <li><a href="{{$_menu->url}}" >{{$_menu->title}}</a></li>
        @endif
        @endforeach
    </ul>
  </nav>

  <div class="search-bar right clearfix">
    <form action="http://www.example.com">
      <input name="s" type="text" data-value="search" value="search">
      <input name="submit" type="submit" value="">
    </form>
  </div>
</header>
