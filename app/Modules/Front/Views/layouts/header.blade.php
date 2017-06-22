<div class="header">
  <div class="wrap-header">
    <a href="{!!route('front.getIndex')!!}" class="logo">
      <img src="{!!Request::segment(1) != '' ? asset('public/assets/frontend/images/logo-blue.png') : asset('public/assets/frontend/images/logo.png')!!}" style="max-width:87px" class="img-responsive" alt="">
    </a>
    <button type="button" class="btn-wrap-menu overlay-close" id="trigger-overlay">
      <span class="text-menu">Menu</span>
      <span class="icon-bar"></span>
    </button>
  </div>
</div>	<!-- end header -->
<div class="overlay-menu overlay overlay-door">
  <nav>
    <ul class="main-navigation">
      <li><a href="{!!route('front.getAgency')!!}">Agency</a></li>
      <li><a href="{!!route('front.getAgency','service')!!}">Services</a></li>
      <!-- <li><a href="product.html">Projects</a></li> -->
      <li><a href="{!!route('front.getAgency','client')!!}">Clients</a></li>
      <li><a href="{!!route('front.getProject')!!}">Projects</a></li>
      <li><a href="{!!route('front.getContact')!!}" >Contact</a></li>
      <li><a href="{!!route('front.getContact','register')!!}">PLAN YOUR NEXT EVENT WITH US</a></li>
    </ul>
  </nav>
</div>
