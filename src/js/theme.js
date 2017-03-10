(function($){

	var matchLeaveReviewLink = function(){
		if( $( 'body' ).hasClass( 'home' ) ){
			var w = window.innerWidth;
			$( '.leave-review-container' ).css( {'height' : 'auto' } );
			if( w >= 1024 ){
				var h = $( '.review-left' ).height() + $( '.svg-review' ).height();
				$( '.leave-review-container' ).css({'height' : h + 'px' } );
			}
		}
	};

	$(window).load(function(){
		matchLeaveReviewLink();
	})

	$(document).ready(function(){
		

		optimizedResize.add( matchLeaveReviewLink );

		$('.cert-container').slick({
		  infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
		  nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		  responsive: [
		  	{
		  		breakpoint: 1024,
		  			settings: {
		  			slidesToShow: 2,
		  			slidesToScroll: 2,
		  		}
		  	},
		  	{
		  		breakpoint: 768,
		  			settings: {
		  			slidesToShow: 1,
		  			slidesToScroll: 1,
		  		}
		  	}

		  ]
		});

		$('.hero_slider_container').slick({
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			responsive: [
		  	{
		  		breakpoint: 1024,
		  			settings: {
		  			autoplay: true,
  					autoplaySpeed: 5000,
		  		}
		  	}
		  	]
		});

		$('.reviews').slick({
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		$('.review-left').slick({
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true
		});
	});
})(jQuery);