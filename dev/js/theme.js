function initializeMap() {

	if ($('.map').length) {
		$('.map').each(function () {
			var latLng = { lat: $(this).data('lat'), lng: $(this).data('lng') };
			var mapID = $(this).attr('id');

			map = new google.maps.Map(document.getElementById(mapID), {
				zoom: 14,
				center: latLng,
				disableDefaultUI: true
			});

			var marker = new google.maps.Marker({
				position: latLng,
				map: map,
			});
		});
	}
}

function initializeTabbedMap() {
	if ($('.map').length) {
		$('.map').each(function () {
			var lat = 52.092876;
			var lng = 5.104480;

			var latLng = { lat: lat, lng: lng };
			var mapID = $(this).attr('id');

			map = new google.maps.Map(document.getElementById(mapID), {
				zoom: 8,
				center: latLng,
				disableDefaultUI: true
			});
		});
	}
}

function addLocationToMap(lat, lng, title, content) {
	var latLng = { lat: lat, lng: lng };

	var marker = new google.maps.Marker({
		position: latLng,
		map: map,
		animation: google.maps.Animation.DROP,
	});

	var infowindow = new google.maps.InfoWindow({
		content: "<strong>" + title + "</strong><br />" + content,
	});

	marker.addListener('click', function () {
		infowindow.open(map, marker);
	});
}

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


	if ($('.js-logo-slider').length > 0) {

		$('.js-logo-slider').slick({
			arrows: false,
			autoPlay: false,
			autoplaySpeed: 2000,
			pauseOnHover: true,
			prevArrow: '<button type="button" class="prev destroy-button-style"></button>',
			nextArrow: '<button type="button" class="next destroy-button-style"></button>',
			slidesToShow: 6,
			centerPadding: '0',
			swipeToSlide: true,
			rows: 0,
			responsive: [
				{
					breakpoint: 1090,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 767,
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

