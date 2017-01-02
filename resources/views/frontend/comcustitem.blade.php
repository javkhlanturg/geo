@foreach($list as $item)
<div class="four column" style="margin-top:10px">
  <a href="{{$item->url}}" target="_blank"><img width="100%" src="/{{$item->bannerpath}}" alt=""></a>
</div>
@endforeach
