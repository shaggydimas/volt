<script src="js/modernizr-custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js?v=<?php echo rand(); ?>"></script>
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
			$('.volt--services').css({
				'background-size':'cover',
				'background':'black',
				'background-repeat':'no-repeat',
				'background-position':'center top'
			});
			setTimeout(function(){
				$('.volt--services').css({
					'background':'transparent',
					'background-image':'url(img/'+data+')',
					'background-repeat':'no-repeat',
					'background-position':'center top',
					'background-size':'cover'
				});
			}, 1000);
		}
	});
</script>