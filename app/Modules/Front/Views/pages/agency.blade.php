@extends('Front::layouts.default')

@section('title','BS Group - Bespoke Event Agency - About Us')

@section('css')
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/agency.css">
@stop
@section('script')
<script>
	$(document).ready(function(){

		var projectSwiper = new Swiper('#swiper-partner',{
			slidesPerView : 10,
      slidesPerColumn:4,
			spaceBetween: 10,
			autoplay: 1000,
			speed: 2000,
			breakpoints:{
				992: {
					slidesPerView: 6,
     			spaceBetween: 10,
          slidesPerColumn:3,
				},
				480: {
					slidesPerView: 2,
     			spaceBetween: 10,
          slidesPerColumn:2,
				}
			}
		})

    $('#swiper-partner').hover(function(){
      projectSwiper.stopAutoplay();
    },function(){
      projectSwiper.startAutoplay();
    });

		// ANIMATION
		animation('animation','fadeInDown','80%');

		@if(Session::has("area"))
		$('html, body').animate({scrollTop: $("#{!!Session::get('area')!!}").offset().top}, 3500);
		@endif
	})
	</script>
@stop

@section('content')
	<div class="dotstyle dotstyle-fillup">
	  <ul>
	    <li class="current"><a class="tooltipser" title="THE PEOPLE" href="#people">The People </a></li>
	    <li><a class="tooltipser" title="OUR VISION" href="#vision">Our Vision</a></li>
	    <li><a class="tooltipser" title="Our Services" href="#service">Our Services</a></li>
	    <li><a class="tooltipser" title="Our Client" href="#client">Our Client</a></li>
	  </ul>
	</div>

<section class="section section01" id="people">
  <div class="title-container">
    <div class="wrap-title">
      <h2 class="title"><i class="ic-text left"></i>The people behind BS Group<i class="ic-text right"></i></h2>
    </div>
  </div>
  <div class="content-section content01">
    <div class="container fullheight">
      <div class="wrap-content">
        <p class="big-text">
          YES WE CAN, ALWAYS
        </p>
        <p class="small-text">It’s been officially 10 years we have dedicated our heart and soul to events. We are proud to be our clients’ companion, understanding, commited, caring, and flexible.</p>
      </div>
    </div>
  </div>
</section>	<!-- end section01 -->
<section class="section section02" id="vision">
  <div class="top-section">
    <div class="container">
      <h2 class="title">The ultimately purpose of events<br/>is to build a heritage</h2>
      <div class="row ">
        <div class="col-md-6 col-sm-12">
          <div class="each-vision">
            <h3 class="title-level-2">OUR VISION</h3>
            <p class="description">“The moment may be temporary, but the memory is forever”. <br/>As a bespoke event agency, we aim to create events that will build a heritage; events that you are proud of, and so are we.</p>
          </div>

        </div>
        <div class="col-md-6 col-sm-12">
          <div class="each-vision">
            <h3 class="title-level-2">OUR APPROACH</h3>
            <p class="description">As the high-end event agency, we constantly challenge ourselves to innovate the event management process while maintaining a wide extensive network with competent suppliers.  All are dedicated to offering high-quality event and the best experience to our attendees.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="bottom-section">
    <div class="fullheight container">
      <div class="left-img">
        <div class="img-container"></div>
      </div>
      <div class="right-top-img right-img">
        <div class="img-container"></div>
      </div>
      <div class="right-bottom-img right-img">
        <div class="img-container"></div>
      </div>
      <div class="right-middle-img right-img">
        <div class="img-container"></div>
      </div>
    </div>

  </div>
</section>	<!-- end section02 -->

<section class="section section03" id="service">
  <div class="title-container">
    <div class="container">
      <div class="wrap-title">
        <h2 class="title"><i class="ic-text left"></i>OUR SERVICES<i class="ic-text right"></i></h2>
        <p class="sub-title">ALL ABOUT EVENTS</p>
        <p class="description">Just like you are guaranteed your best-fit suit with a bespoke tailoring service, you are guaranteed your best-fit events with us. From a breathtaking <b>Festival</b>, to an important <b>Marketing Event</b>, or a special <b>Corporate Event</b>, simply enjoy your good time.</p>
      </div>
    </div>
  </div>
  <div class="content-section content03">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="each-service">
            <img src="{!!asset('public/assets/frontend')!!}/images/agency/ic-event01.png" class="img-responsive img-service" alt="Service">
            <h4 class="name-service">Event Concepts</h4>
            <div class="description">
              <ul class="list-des">
                <li>Content Development</li>
                <li>Brand Engagement & Support</li>
                <li>Graphic Design</li>
                <li>Stage & Scenic Design </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="each-service">
            <img src="{!!asset('public/assets/frontend')!!}/images/agency/ic-event02.png" class="img-responsive img-service" alt="Service">
            <h4 class="name-service">Event  Logistics</h4>
            <div class="description">
              <ul class="list-des">
                <li>Registration Management Venue Selection & Sourcing</li>
                <li>Food & Beverage Coordination</li>
                <li>Hotel & Travel Management</li>
                <li>Sponsor Relations</li>
                <li>VIP Coordination</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="each-service">
            <img src="{!!asset('public/assets/frontend')!!}/images/agency/ic-event03.png" class="img-responsive img-service" alt="Service">
            <h4 class="name-service">Event Technology</h4>
            <div class="description">
              <ul class="list-des">
                <li>Online Event Portals</li>
                <li>Social Media</li>
                <li>Digital Engagement</li>
                <li>Live Streaming</li>
                <li>Video Development,<br/>& Direction & Editing</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="each-service">
            <img src="{!!asset('public/assets/frontend')!!}/images/agency/ic-event04.png" class="img-responsive img-service" alt="Service">
            <h4 class="name-service">Event Activation</h4>
            <div class="description">
              <ul class="list-des">
                <li>Design & Construction Services</li>
                <li>Graphic Production</li>
                <li>Event Production</li>
                <li>Technical Direction</li>
                <li>Audio Visual Services & Equipment</li>
                <li>Speaker & Talent Management</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>	<!-- end section 03 -->

<section class="section section04" id="client">
  <div class="title-container">
    <div class="wrap-title">
      <h2 class="title"><i class="ic-text left"></i>Our Clients<i class="ic-text right"></i></h2>
      <!-- <p class="sub-title">Quality is our best service</p> -->
    </div>
  </div>
  <div class="content-section content04">
    <div class="container">
      <div class="swiper-container" id="swiper-partner">
        <div class="swiper-wrapper">
          @for($i = 1; $i <= 71 ; $i++)
						<div class="swiper-slide">
	            <img src="{!!asset('public/assets/frontend')!!}/images/logo-partner/logo_{!!$i!!}.png" class="img-responsive logo-partner" alt="">
	          </div>
					@endfor

        </div>
      </div>
    </div>

  </div>
</section>	<!-- end section 03 -->


<div class="background-area">
  <div class="center">
    <div class="v-center">
      <h2 class="title"><i class="ic-text left"></i>New Project<i class="ic-text right"></i></h2>
      <p class="sub-title animation hide-ani">How about planning<br/>your next event with us?</p>
      <a href="{!!route('front.getContact','register')!!}" class="readmore">LET'S CREATE RESULTS</a>
    </div>
  </div>
</div>	<!-- end Background area -->

<div class="tenyear-footer">
  <img src="{!!asset('public/assets/frontend')!!}/images/ten-year-small.png" class="img-responsive" alt="">
</div>
@stop
