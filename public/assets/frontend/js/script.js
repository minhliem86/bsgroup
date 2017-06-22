$(document).ready(function(){
	$('.ic-scrolldown').on('click',function(){
		var target = $(this).data('target');

		$('html, body').animate({
			scrollTop:$(target).offset().top
		},1000);
	})
})

function animation(classname, animate,offset){
	classname  = classname || 'animation';

	$('.'+classname).each(function(index,el){
		new Waypoint({
			element: el,
			handler:function(direction){
				var element = $(this.element),
				delay = element.attr("data-delay");
				// $(el).removeClass('hide-ani');
				setTimeout(function(){
					$(el).addClass('animated '+animate+' show-ani');
				},delay);
				this.destroy();
			},
			offset: offset
		});
	});
}