<footer class="row clearfix">
  				<!-- Footer widgets -->
  				<!-- End Footer widgets -->

  				<div class="copyright clearfix">
  					© Copyright 2016 Геологи, Уул уурхай мэдээ сонин
            <?php $pages = TCG\Voyager\Models\Page::where('status','ACTIVE')->get();?>
            <div class="right" style="margin-right:50px">
              @foreach($pages as $_page)
              <a href="/page/{{$_page->slug}}" style="color:#fff; font-size:14px;">{{$_page->title}}</a> \
              @endforeach
            </div>
  				</div>

  				<div id="back-to-top" class="right">
  					<a href="#top">Сайтын орой уруу очих</a>
  				</div>
  			</footer>
