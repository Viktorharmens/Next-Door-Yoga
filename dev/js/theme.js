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

/**
 *	
 *	Set Row Margins
 * 	Sets the margin of the rows
 *
 */
function setRowMargins() {
	$('.page-row').each(function () {

		var baseTopmargin = $(this).data('desktop-margin-top');
		var tabletTopmargin = $(this).data('tablet-margin-top');
		var mobileTopmargin = $(this).data('mobile-margin-top');

		var baseBottommargin = $(this).data('desktop-margin-bottom');
		var tabletBottommargin = $(this).data('tablet-margin-bottom');
		var mobileBottommargin = $(this).data('mobile-margin-bottom');

		if (baseTopmargin !== '' || tabletTopmargin !== '' || mobileTopmargin !== '' || baseBottommargin !== '' || tabletBottommargin !== '' || mobileBottommargin !== '') {

			if ($(window).width() < 979 && $(window).width() > 768) {
				// Tablet
				$(this).css('margin-top', ((tabletTopmargin !== '') ? tabletTopmargin : baseTopmargin));
				$(this).css('margin-bottom', ((tabletBottommargin !== '') ? tabletBottommargin : baseTopmargin));
			}

			else if ($(window).width() < 768) {
				// Mobile
				$(this).css('margin-top', ((mobileTopmargin !== '') ? mobileTopmargin : baseTopmargin));
				$(this).css('margin-bottom', ((mobileBottommargin !== '') ? mobileBottommargin : baseTopmargin));
			}

			else {
				// Desktop
				$(this).css('margin-top', baseTopmargin);
				$(this).css('margin-bottom', baseBottommargin);
			}

		}

		var baseToppadding = $(this).data('desktop-padding-top');
		var tabletToppadding = $(this).data('tablet-padding-top');
		var mobileToppadding = $(this).data('mobile-padding-top');

		var baseBottompadding = $(this).data('desktop-padding-bottom');
		var tabletBottompadding = $(this).data('tablet-padding-bottom');
		var mobileBottompadding = $(this).data('mobile-padding-bottom');

		var target = (($(this).data('target') === 'row' || $(this).data('target') === undefined) ? $(this) : $(this).find('.content'));

		if (baseToppadding !== '' || tabletToppadding !== '' || mobileToppadding !== '' || baseBottompadding !== '' || tabletBottompadding !== '' || mobileBottompadding !== '') {

			if ($(window).width() < 979 && $(window).width() > 768) {
				// Tablet
				target.css('padding-top', ((mobileToppadding !== '') ? mobileToppadding : baseToppadding));
				target.css('padding-bottom', ((tabletBottompadding !== '') ? tabletBottompadding : baseBottompadding));
			}

			else if ($(window).width() < 768) {
				// Mobile
				target.css('padding-top', ((mobileToppadding !== '') ? mobileToppadding : baseBottompadding));
				target.css('padding-bottom', ((mobileBottompadding !== '') ? mobileBottompadding : baseBottompadding));
			}

			else {
				// Desktop
				target.css('padding-top', baseToppadding);
				target.css('padding-bottom', baseBottompadding);
			}

		}

	});
}


function stickySidebarBlock(sidebarBlockTop, sidebarBlockLeft, sidebarWidth, sidebarElement) {
	if (parseFloat($(window).width()) > 979 && sidebarElement.length === 1) {
		var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

		if (scrollPosition > (sidebarBlockTop - 140)) {
			sidebarElement.css('left', sidebarBlockLeft)
				.css('width', sidebarWidth);
			sidebarElement.addClass('is--fixed');
		} else {
			sidebarElement.css('left', 'auto');
			sidebarElement.removeClass('is--fixed');
		}
	} else {
		sidebarElement.removeAttr('style');
		sidebarElement.removeClass('is--fixed');
	}
}

function highlightSidebarBlockItem(sidebarElement) {
	var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

	// Get the offset for each sidebarElement linked block on page
	$(sidebarElement).find('li a').each(function () {
		if (scrollPosition > ($($(this).attr('href')).offset().top - 140)) {
			$(this).parent('li').addClass('is--active');
		} else {
			$(this).parent('li').removeClass('is--active');
			$(this).parent('li').removeClass('is--current');
		}
	});

	setTimeout(function () {
		$(sidebarElement).find('.is--active').removeClass('is--current');
		$(sidebarElement).find('.is--active').last().addClass('is--current');
	}, 50);
}

function getNotificationPositionCorrect() {
	var scroll = parseInt($(window).scrollTop());
	var notificationCorrect = 0;

	// Add some mitigation for an active notification bar
	if ($('.notification').hasClass('is--active')) {
		var notificationHeight = parseInt($('.notification').outerHeight());
		notificationCorrect = ((notificationHeight > scroll) ? (notificationHeight - scroll) : 0);

		// Set the position of the site header
		$('.site-header').css('top', notificationCorrect + 'px');
	}

	return notificationCorrect;
}

function checkActiveNotification() {
	var currentNotification = $('.js-close-notification').data('id');

	if (Cookies.get('notification_' + currentNotification) === null || Cookies.get('notification_' + currentNotification) === undefined) {
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: { action: 'get_notification_bar_status' },
			success: function (response) {
				var data = JSON.parse(response);

				if (data.status === 'show') {
					$('.notification').addClass('is--active');
					$('.notification__message span').html(data.notification);
					getNotificationPositionCorrect();
				}

			}
		});
	}

	$('.js-close-notification').on('click', function (e) {
		e.preventDefault();
		Cookies.set('notification_' + currentNotification, 'true', { expires: 14 });
		$('.notification').removeClass('is--active');
		$('.notification__message span').html('');
		getNotificationPositionCorrect();
		$('.site-header').css('top', '0');
	});
}


$(function () {

	// Check if the notification needs to be shown
	checkActiveNotification();
	$(window).on('resize', function () { getNotificationPositionCorrect(); });

	// Check if the url contains the introduction string
	if (window.location.href.indexOf('?_welcome') > 0) {
		openModal('introduction');
	}

	setTimeout(function () { $(window).trigger('resize') }, 500);

	// Scroll the anchor box when present in file
	var anchorBox = $('.anchors__box');
	if (anchorBox.length) {

		// Set defaults
		sidebarWidth = anchorBox.width();
		sidebarBlockTop = anchorBox.offset().top;
		sidebarBlockLeft = anchorBox.offset().left;
		stickySidebarBlock(sidebarBlockTop, sidebarBlockLeft, sidebarWidth, anchorBox);

		$(window).on('resize', function () {
			sidebarWidth = anchorBox.width();
			sidebarBlockTop = anchorBox.offset().top;
			sidebarBlockLeft = anchorBox.offset().left;
			stickySidebarBlock(sidebarBlockTop, sidebarBlockLeft, sidebarWidth, anchorBox);
		});

		$(window).on('scroll', function () {
			stickySidebarBlock(sidebarBlockTop, sidebarBlockLeft, sidebarWidth, anchorBox);
			highlightSidebarBlockItem(anchorBox);
		});


		$('.js-scroll-to-content').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({ scrollTop: (parseInt($($(this).attr('href')).offset().top) - 120) + 'px' }, 400);
		});
	}

	// Check if the page location contains a hashtag (ex. #over-ons)
	if (window.location.hash) {
		// Check if the element with the id of hashtag is present in the document
		if ($(window.location.hash).length) {
			$('html,body').animate({ scrollTop: (parseInt($(window.location.hash).offset().top) - 120) + 'px' }, 400);
			stickySidebarBlock(0, sidebarBlockLeft, sidebarWidth, anchorBox);
		}
	}


	if ($('.page-row').length) {
		setRowMargins();
		$(window).on('resize', function () { setRowMargins(); });
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

	$('.js-toggle-chat').on('click', function (e) {
		e.preventDefault();

		if (Cookies.get('cookies') !== null && Cookies.get('cookies') !== undefined) {
			if ($(this).hasClass('is--active')) {
				$zopim(function () {
					$zopim.livechat.window.hide();
				});
			} else {
				// Load the zopim chat
				$zopim(function () {
					$zopim.livechat.window.show();
				});
			}
		} else {
			alert('U dient eerst de cookies te accepteren.');
		}
	});


	// GOOGLE ANALYTICS GOAL TRACKING FUNCTION
	$(document).on('click', '.js-track-ga-event', function () {
		var goalCategory = $(this).data('goal-category');
		var goalAction = $(this).data('goal-action');

		// Send to Google Analytics as event-tracking
		ga('send', 'event', goalCategory, goalAction);
	});

	$('.js-handle-faq').on('click', function (e) {
		e.preventDefault();
		$(this).parents('.faq').toggleClass('is--active');
	});

	$(document).ready(function () {
		// Change this to the correct selector.
		$('.header').midnight();
	});

});

