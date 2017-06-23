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
<div class="dotstyle dotstyle-fillup">
  <ul>
    <li><a class="tooltipser" title="Onecoin" href="#Onecoin">Onecoin </a></li>
    <li><a class="tooltipser" title="Wanek" href="#Wanek">Wanek</a></li>
    <li><a class="tooltipser" title="Sparx" href="#Sparx">Sparx</a></li>
    <li><a class="tooltipser" title="Schindler" href="#Schindler">Schindler</a></li>
    <li><a class="tooltipser" title="Total" href="#Total">Total</a></li>
    <li><a class="tooltipser" title="MJS" href="#MJS">MJS</a></li>
    <li><a class="tooltipser" title="Abbott" href="#Abbott">Abbott</a></li>
    <li><a class="tooltipser" title="UNZA" href="#UNZA">UNZA</a></li>
    <li><a class="tooltipser" title="TMG" href="#TMG">TMG</a></li>
    <li><a class="tooltipser" title="Cát Tường" href="#catuong">Cát Tường</a></li>
  </ul>
</div>

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

<div class="section section-project" id="Onecoin">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Onecoin – Ha Noi<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!--
					<div class="wrap-title">
						<p class="description"><b>Thử thách:</b> Tổ chức chương trình tôn vinh các danh hiệu cống hiến trong một năm vừa qua đồng thời thông báo về các cá nhân được thăng hạng mới trong hệ thống. Yêu cầu chương trình tổ chức cho 2000 thành viên tham dự, thế hiện sự đẳng cấp, sang trọng nhưng không kém phần chuyên nghiệp trong các công tác quản lý nhằm giúp các thành viên có được trải nghiệm toàn vẹn suốt chuỗi hoạt động.</p>

						<p class="description"><b>Giải pháp:</b> Lấy cảm hứng từ hình tượng “đá kim cương”, chương trình được xây dựng với quy mô, đẳng cấp trong việc tôn vinh giá trị cống hiến của các thành viên. Trung tâm Hội Nghị Quốc Gia – Hà Nội là địa điểm được lựa chọn, giải quyết bài toán số lượng đặt ra cho dịch vụ khách hàng</p>
					</div>
				-->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=uRUK1GKeOc0" type="video/youtube">
					</video>
				</div>
			</div>
		</div>
	</div>
</div>	<!-- end section02 -->

<div class="section section-project" id="Total">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>ONECOIN - TIMELAPSE<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=JzcN4tzs6gE" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->

<div class="section section-project" id="Total">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Total – Phu Quoc<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=FtCCFbSwLTM" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->

<div class="section section-project" id="Wanek">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Wanek – Madagui<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!-- <div class="wrap-title">
						<p class="description">“Không gì là không thể” – Việc thách thức bản thân trước những thử thách mới luôn là điều khiến bạn trở thành một người mạnh mẽ hơn, hoàn thiện hơn. Lấy ý tưởng từ các Siêu Anh Hùng. Chương trình teambuilding thú vị với những hoạt động mạnh, yêu cầu sự gan dạ, bản lĩnh từ các thành viên tham gia. Liệu bạn có dám thử ?</p>
					</div> -->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=P5N3wNB2RdI" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->


<div class="section section-project" id="Sparx">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Sparx* – Phan Thiet<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!--
					<div class="wrap-title">
						<p class="description">Mỗi tập thể là sự tổng hòa giữa mỗi cá nhân với tính cách, sở thích, độ tuổi, …khác nhau. Mỗi người là tượng trưng cho mỗi màu sắc khác nhau. Để có được bức tranh đẹp hoàn chỉnh, mỗi màu sắc cần phải dung hòa, phối hợp với nhau vừa phát huy được tối đa sức mạnh cá nhân vừa phát triển sức mạnh tập thể.</p>
					</div> -->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=lY4aAhiAykQ" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->

<div class="section section-project" id="Schindler">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Schindler – Can Tho<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!--
					<div class="wrap-title">
						<p class="description">Mong muốn tổ chức được một chương trình teambuilding mới lạ, nhiều thử thách và kết nối được các thành viên trong tổ chức Schindler đến từ ba miền đất nước. BS GROUP đã lựa chọn Cần Thơ, một  xứ sở ở miền sông nước để các thành viên được cùng trải nghiệm các nét đặc trưng văn hóa vùng miền thông qua các hoạt động trong toàn bộ chuỗi chương trình.</p>
					</div> -->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=9rTZ0eck41c" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->

<div class="section section-project" id="MJS">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>MJS – Ho Chi Minh<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!--
					<div class="wrap-title">
						<p class="description"><b>Thử thách:</b> Một yêu cầu được đưa ra cho chúng tôi là tổ chức một chương trình tiệc cuối năm kết hợp với chương trình teambuilding. Vừa thể hiện được sự sang trọng nhưng vẫn đảm bảo tính chất năng động, thử thách sự sáng tạo của mỗi cá nhân tham dự.</p>

						<p class="description"><b>Giải pháp:</b> Lấy cảm hứng từ những mùa giải Grammy, chương trình được tổ chức dựa trên concept: “GRAMMY”. Mỗi cá nhân được hóa mình vào sự nghiệp làm phim, trong các vai trò: Đạo diễn, biên kịch, quay phim... Để hoàn thiện sản phẩm tham gia mùa giải Grammy, mỗi thành viên cần nỗ lực – kết hợp với nhau để hoàn thiện nó.</p>
					</div>-->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=SaNp53dKA3E" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->


<div class="section section-project" id="Abbott">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Abbott – Singapore<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=Z01Ry1UIg0M" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->

<div class="section section-project" id="UNZA">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>UNZA – Phan Thiet<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!--
					<div class="wrap-title">
						<p class="description">Kỷ luật – đoàn kết – kiên cường – tinh thần thép. Đó là những gì một tập thể, mỗi cá nhân cần có để hoàn thành tốt nhiệm vụ được giao. Chương trình teambuilding, lấy cảm hứng quân ngũ giúp các thành viên ý thức rõ được những nhiệm vụ khó khăn cần đối mặt và cần phải đoàn kết để cùng nhau vượt qua.</p>
					</div>-->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=vmDLzmTUzyo" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->




<div class="section section-project" id="TMG">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>TMG – Ha Noi<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<!--
					<div class="wrap-title">
						<p class="description">Chương trình teambuilding được tổ chức dưới hình thức Amazing Race. Các thành viên của mỗi team phải cùng nhau vượt qua các chặng thử thách được đặt ở các vị trí, khu vực địa lý khác nhau. Ở mỗi chặng của cuộc đua, ban tổ chức không chỉ nhằm mục đích cho các thành viên tham gia trò chơi mà còn mang tính chất khám phá, đồng thời qua đó, nâng cao tinh thần đội nhóm, khả năng hoạt động nhóm của mỗi thành viên.</p>
					</div>-->
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=p5l8PQqtnyo" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->



<div class="section section-project" id="catuong">
	<div class="bottom-section">
		<div class="container">
			<div class="row">
				<h2 class="title"><i class="ic-text left"></i>Cat Tuong – Da Lat<i class="ic-text right"></i></h2>
				<div class="wrap-video">
					<video class="video" width="800" height="480" controls>
						<source src="https://www.youtube.com/watch?v=diJhHRBkfxs" type="video/youtube">
					</video>
				</div>
			</div>
		</div>

	</div>
</div>	<!-- end section02 -->

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
