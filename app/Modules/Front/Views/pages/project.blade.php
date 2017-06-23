@extends('Front::layouts.default')

@section('title','BS Group - Bespoke Event Agency - About Us')

@section('css')
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/product.min.css">
@stop
@section('script')
	<!-- VIDEO 2 -->
	<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/plyr/plyr.css">
	<script type="text/javascript" src="{!!asset('public/assets/frontend')!!}/js/plyr/plyr.js"></script>
	<script src="{!!asset('public/assets/frontend')!!}/js/video2/jquery.video-extend.js"></script>
<script>
	$(document).ready(function(){
		// ANIMATION
		animation('animation','fadeInDown','80%');
		$('video.video').videoExtend();
	})
	</script>
@stop

@section('content')
@if(!$inst->isEmpty())
<div class="dotstyle dotstyle-fillup">
	  <ul>
	@foreach($inst as $item_li)
		    <li><a class="tooltipser" title="{{$item_li->title}}" href="#{{\LP_lib::unicode($item_li->title)}}">Onecoin </a></li>
	@endforeach
	</ul>
</div>
@endif
<div class="section section01">
	<div class="title-container">
		<div class="wrap-title">
			<h2 class="title"><i class="ic-text left"></i>Previous Projects<i class="ic-text right"></i></h2>
			<p class="description">Like what you see?</p>
			<p class="description">Your event can be greater!</p>
			<p class="description">Contact us to request for more project recap videos.</p>
		</div>
	</div>
	<div class="content-section content01"></div>
</div>	<!-- end section01 -->

@if(!$inst->isEmpty())
@foreach($inst as $item)
	<div class="section section-project" id="{{\LP_lib::unicode($item->title)}}">
		<div class="bottom-section">
			<div class="container">
				<div class="row">
					<h2 class="title"><i class="ic-text left"></i>{{$item->title}}<i class="ic-text right"></i></h2>
					<div class="wrap-video">
						<!--
						<div class="wrap-title">
							<p class="description"><b>Thử thách:</b> Tổ chức chương trình tôn vinh các danh hiệu cống hiến trong một năm vừa qua đồng thời thông báo về các cá nhân được thăng hạng mới trong hệ thống. Yêu cầu chương trình tổ chức cho 2000 thành viên tham dự, thế hiện sự đẳng cấp, sang trọng nhưng không kém phần chuyên nghiệp trong các công tác quản lý nhằm giúp các thành viên có được trải nghiệm toàn vẹn suốt chuỗi hoạt động.</p>

							<p class="description"><b>Giải pháp:</b> Lấy cảm hứng từ hình tượng “đá kim cương”, chương trình được xây dựng với quy mô, đẳng cấp trong việc tôn vinh giá trị cống hiến của các thành viên. Trung tâm Hội Nghị Quốc Gia – Hà Nội là địa điểm được lựa chọn, giải quyết bài toán số lượng đặt ra cho dịch vụ khách hàng</p>
						</div>
					-->
						<video class="video" width="800" height="480" controls>
							<source src="https://www.youtube.com/watch?v={{$item->videos->first()->video_id}}" type="video/youtube">
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>	<!-- end section02 -->
@endforeach
@endif

<section class="section" id="new-project">
  <div class="background-area">
    <div class="center">
      <div class="v-center">
        <h2 class="title"><i class="ic-text left"></i>New Project<i class="ic-text right"></i></h2>
        <p class="sub-title animation hide-ani">How about planning<br/>your next event with us?</p>
        <a href="{!!route('front.getContact','register')!!}" class="readmore">LET'S CREATE RESULTS</a>
      </div>
    </div>
  </div>	<!-- end Background area -->
</section>

<div class="tenyear-footer">
  <img src="{!!asset('public/assets/frontend')!!}/images/ten-year-small.png" class="img-responsive" alt="">
</div>
@stop
