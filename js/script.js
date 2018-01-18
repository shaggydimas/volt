$(function(){
	var win = $(window);
	var services = $('.volt--services');
	var scrollLinks = $('[data-scroll]');
	var owl = $('#owl');
	var body = $('body');
	var burger = $('.burger-btn');
	var form = $('#email-form');
	var formLoader = $('.form-loader');
	var infoGraphic = $('.info-graphic');
	
	scrollLinks.on('click',function(e){
		e.preventDefault();
		var href = $(this).attr('data-scroll');
		$('body, html').animate({
			scrollTop: $(href).offset().top
		});
	});
	win.on('scroll',function(e){
		if(win.scrollTop() > infoGraphic.offset().top - win.height() + 100){
			infoGraphic.addClass('animated')
		}
		var about = $('#about');
		if( win.scrollTop() > about.offset().top - win.height() + 150 ) {
			about.addClass('animated');
		}
	})
	$('.control-left').click(function() {
		owl.trigger('prev.owl.carousel');
	});
	$('.control-right').click(function() {
		owl.trigger('next.owl.carousel');
	});
	burger.on('click', function(){
		$(this).toggleClass('open');
		body.toggleClass('menu-open');
	})
	$('.mobile-menu a').on('click',function(){
		body.removeClass('menu-open');
		burger.removeClass('open');
	});
	form.on('submit',function(e){
		e.preventDefault();
		var data = $(this).serialize();
		formLoader.show();
		$.ajax({
			url:"/mail.php",
			method:"POST",
			data: data,
			success: function(data){
				$('#response').hide().html(data).fadeIn();
			},
			complete: function(){
				formLoader.hide();
			}
		})
	});
	var lastSelected = 0;
	$('[data-item]').on('click',function(e){
		var el = parseInt($(this).attr('data-item'));
		goTo(el);
		lastSelected = el;
	});
	function goTo(count){
		console.log(count, lastSelected);
		if(lastSelected > count){
			var res = lastSelected - count;
			for(var i = 0; i < res; i++) {
				owl.trigger('prev.owl.carousel');
			}
		}
		else {
			var res = count - lastSelected;
			for(var i = 0; i < res; i++) {
				owl.trigger('next.owl.carousel');
			}
		}
	}
	$('.accordion').on('click','.item', function(e){
		//$('.item.active').removeClass('active');
		var textDiv = $(this).find('div');
		var val = textDiv.css("display") === "none" ? "-" : "+";
		textDiv.slideToggle();
		textDiv.next('.hasText').text(val);
	});
	$('.showMoreBtn').on('click', function(){
		var val = $(this).text() === "↓" ? "↑" : "↓";
		$(this).next('.hidden-items').slideToggle();
		$(this).html(val);
	})
});