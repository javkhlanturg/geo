<footer class="row clearfix">
  				<!-- Footer widgets -->
  				<!-- End Footer widgets -->

  				<div class="copyright clearfix">
  					© Copyright 2016 Геологи, Уул уурхай мэдээ сонин
            <div class="pull-right" style="font-size:14px">
              @foreach($pages as $_page)
              <a href="/page/{{$_page->slug}}" style="color:#fff">{{$_page->title}}</a> \
              @endforeach
            </div>
  				</div>

  				<div id="back-to-top" class="right">
  					<a href="#top">Сайтын орой уруу очих</a>
  				</div>
  			</footer>
