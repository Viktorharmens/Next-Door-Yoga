$(function () {

		$('.js-scroll-to-content').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({ scrollTop: (parseInt($($(this).attr('href')).offset().top) - 120) + 'px' }, 400);
		});
	

	// Check if the page location contains a hashtag (ex. #over-ons)
	if (window.location.hash) {
		// Check if the element with the id of hashtag is present in the document
		if ($(window.location.hash).length) {
			$('html,body').animate({ scrollTop: (parseInt($(window.location.hash).offset().top) - 120) + 'px' }, 400);
			stickySidebarBlock(0, sidebarBlockLeft, sidebarWidth, anchorBox);
		}
	}


	if ($('.js-slider').length > 0) {

		$('.js-slider').slick({
			arrows: false,
            autoplay: false,
            infinite: true,
			autoplaySpeed: 4000,
			pauseOnHover: true,
			prevArrow: '<button type="button" class="prev destroy-button-style"></button>',
			nextArrow: '<button type="button" class="next destroy-button-style"></button>',
			slidesToShow: 1,
            swipeToSlide: true,
            dots: true,
            responsive: [
				{
				breakpoint: 769,
					settings: {
						slidesToShow: 2,
					}
                },
                {
                    breakpoint: 625,
                    settings: {
                        slidesToShow: 1,
                    }
                }
                
			]
		});
    }
    
	if ($('.js-slider-review').length > 0) {

		$('.js-slider-review').slick({
			arrows: false,
            autoplay: true,
            infinite: true,
			autoplaySpeed: 4000,
			pauseOnHover: true,
			prevArrow: '<button type="button" class="prev destroy-button-style"></button>',
			nextArrow: '<button type="button" class="next destroy-button-style"></button>',
            slidesToShow: 1,
            fade: true,
            cssEase: 'linear',
            swipeToSlide: true,
            dots: true
		});
    }

    if ($('.js-slider-company').length > 0) {

		$('.js-slider-company').slick({
			arrows: true,
            autoplay: true,
            infinite: true,
			autoplaySpeed: 2000,
			pauseOnHover: true,
			prevArrow: '<button type="button" class="prev destroy-button-style"></button>',
			nextArrow: '<button type="button" class="next destroy-button-style"></button>',
			slidesToShow: 4,
            swipeToSlide: true,
            dots: false,
            responsive: [
				{
				breakpoint: 769,
					settings: {
						slidesToShow: 3,
					}
                },
                {
                    breakpoint: 625,
                    settings: {
                        slidesToShow: 1,
                    }
                }
                
			]
		});
	}

	if ($('.js-usp-marquee').length) {
		$('.js-usp-marquee').marquee({
			duration: 15000,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true,
			startVisible: true
		});
	}


	$('.js-toggle-form').on('click', function (e) {
		e.preventDefault();
		$(this).parent().toggleClass('is--active');
	});

});

