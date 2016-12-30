<style>
.footermenu{
  color:#fff;
  font-size:16px;
  font-family: "MAKHelios";
  line-height: 15px;
  font-weight: normal;
}
.footermenu:hover{
  color:#D7D6D6
}
</style>
<footer class="row clearfix">
  				<!-- Footer widgets -->
  				<!-- End Footer widgets -->

  				<div class="copyright clearfix">
  					© Copyright 2016 Геологи, Уул уурхай мэдээ сонин
            <?php $pages = TCG\Voyager\Models\Page::where('status','ACTIVE')->orderBy('order','asc')->get();?>
            <div class="right" style="margin-right:50px">
              @foreach($pages as $_page)
              <a href="/page/{{$_page->slug}}" class="footermenu">{{$_page->title}}</a>&nbsp; | &nbsp;
              @endforeach
            </div>
  				</div>

  				<div id="back-to-top" class="right">
  					<a href="#top">Сайтын орой уруу очих</a>
  				</div>
  			</footer>
