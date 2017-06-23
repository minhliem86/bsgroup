@extends('Front::layouts.default')

@section('css')
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/contact.css">
@stop

@section('script')
  <script type="text/javascript" src="{!!asset('public/assets/frontend')!!}/js/popup/jquery.popupoverlay.js"> </script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#trigger-overlay').on('click',function(){
			if($('.overlay').hasClass('open')){
				$(this).addClass('btn-close');
			}else{
				$(this).removeClass('btn-close');
			}
		})
    $('.contact-form').validate({
				errorElement : 'span',
				errorPlacement:function(error,element){
					if(element.attr('name') == 'service[]'){
						$('.error-service').html(error);
					}else if(element.attr('name') == 'timing[]'){
						$('.error-time').html(error);
					}else if(element.attr('name') == 'budget[]'){
						$('.error-budget').html(error);
					}else{
						error.insertAfter(element);
					}
				},
				ignore: [],
				rules: {
					'service[]': {
					  required: true
					},
					'timing[]':'required',
					'budget[]':'required',
					'name': 'required',
					'email':{
						required: true,
						email: true
					},
					'phone':'required'
				},
				messages:{
					'service[]':{
						'required': 'Please choose one or multi items',
					},
					'timing[]':{
						'required': 'Please choose one or multi items',
					},
					'budget[]':{
						'required': 'Please choose one or multi items',
					},

				}
			})

			animation('animation','fadeInDown','80%');
      @if(Session::has("key"))
        $('html, body').animate({scrollTop: $("#{!!Session::get('key')!!}").offset().top - 50}, 1500);
      @endif

      @if(Session::has("status") && Session::get("status") == 'success' )
				var my_popup = $('#my_popup').popup('show');
      @endif

  })
</script>
@stop
@section('content')
<div class="section" id="section01">

  <div class="above-section01">
    <div class="title-container">
      <div class="center">
        <div class="v-center">
          <h1 class="title"><i class="ic-text left"></i>Contact Us<i class="ic-text right"></i></h1>
          <h3 class="slogan animation hide-ani">No more stress.<br/>We've got you covered!!</h3>
          <p class="phone-num"><a href="tel:08 3775 3799">028 3775 3799</a> - <a href="tel:0918 177 138">0918 177 138</a></p>
          <p class="email"><a href="mailto:info@bsgroup.com.vn">info@bsgroup.com.vn</a></p>
          <p class="addr">B47, 4A Street, Tan Hung Ward, District 7, Ho Chi Minh City, Vietnam</p>
          <i class="ic-scrolldown" data-target="#section02"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-section01"></div>
</div>	<!-- end #section01 -->

<div class="section" id="section02">
  <div class="title-container" id="beginForm">
    <div class="center">
      <div class="v-center">
        <h2 class="title"><i class="ic-text left"></i>Event Planner<i class="ic-text right"></i></h2>
        <h3 class="slogan animation hide-ani">Let's Make Things Happen</h3>
      </div>
    </div>
  </div>
  <div class="form-contact">
    <div class="container">
      <form action="{!!route('front.postContact')!!}" method="POST" class="contact-form">
				{!!Form::token()!!}
        <h4 class="title">HOW WE CAN ASSIST?</h4>
        <fieldset id="form-service">
          <legend>Service</legend>
          <div class="wrap-top clearfix">
            <div class="top">
              <input type="checkbox" name="service[]" id="Concepts" value="Festival"><label for="Concepts">Festival</label>
            </div>
            <div class="top">
              <input type="checkbox" name="service[]" id="Logistics" value="MARKETING EVENT"><label for="Logistics">MARKETING EVENT</label>
            </div>
            <div class="top">
              <input type="checkbox" name="service[]" id="Technology" value="Corporate Event"><label for="Technology">Corporate Event</label>
            </div>
          </div>
          <div class="error-service"></div>
        </fieldset>

        <fieldset id="form-time" class="clearfix">
          <legend>TIMING</legend>
          <div class="wrap-time">
            <input type="checkbox" name="timing[]" id="jan" value="January"><label for="jan">Jan</label>
          </div>
          <div class="wrap-time">
            <input type="checkbox" name="timing[]" id="feb" value="February"><label for="feb">Feb</label>
          </div>
          <div class="wrap-time">
            <input type="checkbox" name="timing[]" id="march" value="March"><label for="march">Mar</label>
          </div>
          <div class="wrap-time">
            <input type="checkbox" name="timing[]" id="apr" value="April"><label for="apr">APR</label>
          </div>
          <div class="wrap-time">
            <input type="checkbox" name="timing[]" id="may" value="May"><label for="may">May</label>
          </div>
          <div class="wrap-time">
            <input type="checkbox" name="timing[]" id="jun" value="June"><label for="jun">Jun</label>
          </div>

          <div class="wrap-time no-mar">
            <input type="checkbox" name="timing[]" id="jul" value="July"><label for="jul">Jul</label>
          </div>
          <div class="wrap-time no-mar">
            <input type="checkbox" name="timing[]" id="aug" value="August"><label for="aug">Aug</label>
          </div>
          <div class="wrap-time no-mar">
            <input type="checkbox" name="timing[]" id="sep" value="September"><label for="sep">Sep</label>
          </div>
          <div class="wrap-time no-mar">
            <input type="checkbox" name="timing[]" id="oct" value="October"><label for="oct">Oct</label>
          </div>
          <div class="wrap-time no-mar">
            <input type="checkbox" name="timing[]" id="nov" value="November"><label for="nov">Nov</label>
          </div>
          <div class="wrap-time no-mar">
            <input type="checkbox" name="timing[]" id="dec" value="December"><label for="dec">Dec</label>
          </div>
          <div class="error-time"></div>
        </fieldset>

        <fieldset id="budget">
          <legend>Budget (USD)</legend>
          <div class="wrap-budget-input clearfix">
            <div class="wrap-budget">
              <input type="checkbox" name="budget[]" id="10" value="10-25K"><label for="10">10 - 25K</label>
            </div>
            <div class="wrap-budget">
              <input type="checkbox" name="budget[]" id="25" value="25-50K"><label for="25">25 - 50K</label>
            </div>
            <div class="wrap-budget">
              <input type="checkbox" name="budget[]" id="50" value="50-100K"><label for="50">50 - 100K</label>
            </div>
            <div class="wrap-budget">
              <input type="checkbox" name="budget[]" id="100" value="more than 100k"><label for="100">MORE THAN 100k</label>
            </div>
          </div>
          <div class="error-budget"></div>
        </fieldset>

        <fieldset id="form-text">
          <h4 class="title">LET’S TALK</h4>
          <div class="wrap-form-text">
            <div class="container-fluid info-form">
              <div class="row form-group">
                <div class="col-sm-4 col-sm-offset-2">
                  <input type="text" name="name" class="form-control" placeholder="NAME">
                </div>
                <div class="col-sm-4">
                  <input type="text" name="phone" class="form-control" placeholder="CONTACT NUMBER">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <input type="text" name="email" class="form-control" placeholder="EMAIL">
                </div>

              </div>
            </div>

            <div class="container-fluid submit-form text-center">
              <input type="submit" class="btn-submit" value="Submit">
            </div>
          </div>
        </fieldset>
      </form>
    </div>


  </div>	<!-- end form contact -->
</div>	<!-- end #section02 -->

<div class="tenyear-footer">
  <img src="{!!asset('public/assets/frontend')!!}/images/ten-year-small.png" class="img-responsive" alt="">
</div>

<div id="my_popup">

	<div class="modal-content">
	  <div class="modal-body">
	    <button type="button" class="my_popup_close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <h4 class="modal-title">Great. We've received your request!</h4>
			<p class="modal-text">Looking forward to talking to you very soon.</p>
			<p class="modal-text">Have a nice day!</p>
	  </div>
	</div><!-- /.modal-content -->
</div>

@stop
