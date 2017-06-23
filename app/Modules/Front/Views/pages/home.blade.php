@extends('Front::layouts.default')

@section('css')
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/home.min.css">
@stop

@section('script')
<!-- VIDEO 2 -->
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/plyr/plyr.css">
<script type="text/javascript" src="{!!asset('public/assets/frontend')!!}/js/plyr/plyr.js"></script>
<script>
$(document).ready(function(){
  var aboutSwiper = new Swiper('#about-swiper',{
    pagination: '#pagination-about',
    paginationClickable: true,
    autoplay: 2500,
     speed: 1200,
  });

  var projectSwiper = new Swiper('#project-swiper',{
    slidesPerView : 3,
    spaceBetween: 10,
    autoplay: 2500,
    speed: 1200,
    breakpoints:{
      480: {
        slidesPerView: 1,
          spaceBetween: 10
      }
    }
  })



  // $('.wrap-all figure').hover(function(){
  // 	projectSwiper.stopAutoplay();
  // },function(){
  // 	projectSwiper.startAutoplay();
  // });

  $('#trigger-overlay').on('click',function(){
    if($('.overlay').hasClass('open')){
      $(this).addClass('btn-close');
      $('.logo img').fadeOut(200, function() {
            $('.logo img').attr("src","{!!asset('public/assets/frontend')!!}/images/logo-blue.png");
            $('.logo img').fadeIn(400);
        });
        $('.header').css({
          'position':'fixed'
        })
    }else{
      $(this).removeClass('btn-close');
      $('.logo img').fadeOut(200, function() {
            $('.logo img').attr("src","{!!asset('public/assets/frontend')!!}/images/logo.png");
            $('.logo img').fadeIn(400);
        });
        $('.header').css({
          'position':'absolute'
        })
    }
  })




  // ANIMATION
  animation('animation','fadeInDown','80%');

  @if(Session::has('recent'))
    $('html, body').animate({scrollTop: $("#{!!Session::get('recent')!!}").offset().top}, 2000);
  @endif

})
</script>
<script>
</script>
<script>
  // jQuery.noConflict(true);
  $(document).ready(function(){
    var players = plyr.setup('#video-player',{
      // controls:[],
      //  clickToPlay: false,
       autoplay:true,
       // volume: 0
    });
  })
</script>
@stop

@section('content')
<div class="dotstyle dotstyle-fillup">
  <ul>
    <li class="current"><a class="tooltipser" title="Home" href="#home">Home</a></li>
    <li><a class="tooltipser" title="Our Agency" href="#about-section">Our Agency</a></li>
    <li><a class="tooltipser" title="Our Services" href="#service-section">Our Services</a></li>
    <li><a class="tooltipser" title="New Projects" href="#new-project">New Projects</a></li>
  </ul>
</div>

<section class="section section01" id="home">
  <div class="center">
    <div class="v-center">
      <p class="title-section01">Bespoke event agency<br/>in vietnam</p>
      <a href="{!!route('front.getAgency')!!}" class="readmore">Read more</a>
      <i class="ic-scrolldown" data-target="#about-section"></i>
    </div>
  </div>
</section> 	<!-- end section 01 -->
<section class="section section02" id="about-section">
  <div class="title-container">
    <div class="center">
      <div class="v-center">
        <h2 class="title"><i class="ic-text left"></i>Our Agency</h2>
        <p class="sub-title animation hide-ani" data-delay="0">We live<br/>by the passion for events</p>
      </div>
    </div>
  </div>
  <div class="img-container clearfix">
    <div class="wrap-left"></div>
    <div class="right-top"></div>
    <div class="right-bottom">
      <div class="swipper-container" id="about-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="each-slide">
              <div class="center">
                <div class="v-center">
                  <img src="{!!asset('public/assets/frontend')!!}/images/icon-slide01.png" alt="">
                  <h3 class="title-slide">CREATIVE SOLUTIONS</h3>
                  <p class="sub-slide">for your best-fit event</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="each-slide">
              <div class="center">
                <div class="v-center">
                  <img src="{!!asset('public/assets/frontend')!!}/images/icon-slide01.png" alt="">
                  <h3 class="title-slide">SMOOTH EVENT MANAGEMENT</h3>
                  <p class="sub-slide">for your high-end experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
          <div class="swiper-pagination" id="pagination-about"></div>
        <a href="{!!route('front.getAgency')!!}" class="link-agency">Our Agency ></a>
      </div>

    </div>
  </div>
</section> <!-- end section 02 -->

<section class="section section03" id="service-section">
  <div class="title-container" id="services">
    <div class="container">
      <div class="center">
        <div class="v-center">
          <h2 class="title"><i class="ic-text left"></i>OUR SERVICES<i class="ic-text right"></i></h2>
          <p class="sub-title margin-bot animation hide-ani">All about Events<br/>All with best quality possible</p>
          <div class="wrap-button">
            <span>
              <a href="{!!route('front.getAgency','service')!!}" class="btn-me margin-ri">Learn more</a>
            </span>
            <span>
              <a href="{!!route('front.getAgency','client')!!}" class="btn-me">Our Clients</a>
            </span>
          </div>
        </div>
      </div> <!-- end center -->
    </div>
  </div> <!-- end #services -->

  <div class="title-container" id="project">
    <div id="video-layer">
      <div id="video-player" data-type="youtube" data-video-id="uRUK1GKeOc0"></div>
      <script>
         var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('video-player', {
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }


        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
          event.target.mute();
        }
      </script>
      <h2 class="title"><a href="{!!route('front.getProject')!!}">RECENT PROJECTS</a></h2>
    </div>
    <!-- <div class="text-project">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

          </div>
        </div>
      </div>
    </div> -->
  </div>

</section>	<!-- end section03 -->

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
