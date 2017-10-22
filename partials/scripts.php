<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/script.js?v=<?php //echo rand(); ?>"></script> -->
<script src="js/minified.js?v=<?php echo rand(); ?>"></script>
<script src="js/owl.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		loop:false,
		margin:10,
		nav:false,
		responsive:{
			0:{
				items:1
			}
		},
		onTranslated: function(event){
			var data = $('.owl-item.active').find('.accordion').attr('data-img');
			if(window.innerWidth < 700){
				data = 'mobile/'+data; 
			}
			$('.volt--services').css({
				'background':'url(img/'+data+')',
				'background-size':'cover',
				'background-repeat':'no-repeat',
				'background-position':'center top'
			});
		}
	});
</script>