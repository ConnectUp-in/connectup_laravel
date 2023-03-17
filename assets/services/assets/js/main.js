(function ($) {

	var windowOn = $(window);
	
	////////////////////////////////////////////////////
	// 01. PreLoader Js
	windowOn.on('load', function () {
		$('#loading').delay(350).fadeOut('slow');
	})


	////////////////////////////////////////////////////
	// 02. Mobile Menu Js
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.tp-mobile-menu',
		meanScreenWidth: "1199",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});
	// wow js 

	////////////////////////////////////////////////////
	// 03. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 300) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	////////////////////////////////////////////////////
	// 04. wow Js
	new WOW().init();

	////////////////////////////////////////////////////
	// 06. Swiper slider Js
	if (jQuery(".ptg-slider-active").length > 0) {
		let sliderActive1 = ".ptg-slider-active";
		let sliderInit1 = new Swiper(sliderActive1, {
			slidesPerView: 1,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: 'fade',

			autoplay: {
				delay: 5000,
			},

			// If we need pagination
			pagination: {
				el: ".ptg-sldider-dot",
				clickable: true,
				renderBullet: function (index, className) {
					return '<span class="' + className + '">' + '<button>' + '0' + (index + 1) + '</button>' + "</span>";
				},
			},

			// Navigation arrows
			navigation: {
				nextEl: ".slider-button-next",
				prevEl: ".slider-button-prev",
			},

			a11y: false,
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + " [data-animation]").each(function () {
					let anim = $(this).data("animation");
					let delay = $(this).data("delay");
					let duration = $(this).data("duration");

					$(this)
						.removeClass("anim" + anim)
						.addClass(anim + " animated")
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration,
						})
						.one(
							"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
							function () {
								$(this).removeClass(anim + " animated");
							}
						);
				});
			};
			animated();
			// Make animated when slide change
			init.on("slideChange", function () {
				$(sliderActive1 + " [data-animation]").removeClass("animated");
			});
			init.on("slideChange", animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}

	var swiper = new Swiper(".brand-slider-active", {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	var swiper = new Swiper(".it-brand-slider-active", {
		slidesPerView: 5,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".mp-brand-slider-active", {
		slidesPerView: 5,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".app-brand-slider-active", {
		slidesPerView: 5,
		spaceBetween: 30,
		loop: true,
		centeredSlides: true,
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".ptg-brand-slider-active", {
		slidesPerView: 5,
		spaceBetween: 30,
		loop: true,
		centeredSlides: true,
		autoplay: {
			delay: 5000,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	var swiper = new Swiper(".tp-bs-testi-active", {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,

		pagination: {
			el: ".tesi-bs-pagination",
			clickable: true,
		},
	});

	var swiper = new Swiper(".tp-it-testi-active", {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,

		// If we need pagination
		pagination: {
			el: ".it-testi-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".it-testi-button-next",
			prevEl: ".it-testi-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".tp-ptg-testi-active", {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,

		// If we need pagination
		pagination: {
			el: ".ptg-testi-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".ptg-testi-button-next",
			prevEl: ".ptg-testi-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".ca-testi-active", {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,

		// If we need pagination
		pagination: {
			el: ".ptg-testi-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".ca-tasti-button-next",
			prevEl: ".ca-tasti-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	var swiper = new Swiper(".da-project-active", {
		loop: true,
		slidesPerView: "auto",
		// centeredSlides: true,
		spaceBetween: 30,

		// If we need pagination
		pagination: {
			el: ".da-project-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".da-project-button-next",
			prevEl: ".da-project-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},

	});
	var swiper = new Swiper(".law-service-slider", {
		slidesPerView: 4,
		loop: true,
		slidesPerView: "auto",
		// centeredSlides: true,
		spaceBetween: 30,

		// If we need pagination
		pagination: {
			el: ".da-project-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".law-sv-button-next",
			prevEl: ".law-sv-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},

	});

	var swiper = new Swiper(".law-porffolio-active", {
		loop: true,
		slidesPerView: "3",
		// centeredSlides: true,
		spaceBetween: 30,

		// If we need pagination
		pagination: {
			el: ".da-project-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".law-pf-button-next",
			prevEl: ".law-pf-button-prev",
		},
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},

	});
	var swiper = new Swiper(".ha-portfolio-slider-active", {
		loop: true,
		slidesPerView: 4,
		spaceBetween: 40,
		centeredSlides: true,
		// If we need pagination
		pagination: {
			el: ".da-project-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".law-pf-button-next",
			prevEl: ".law-pf-button-prev",
		},
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 2.5,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},

	});

	var swiper = new Swiper(".da-testi-active", {
		loop: true,
		slidesPerView: "auto",
		// centeredSlides: true,
		spaceBetween: 30,

		// If we need pagination
		pagination: {
			el: ".da-testi-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".da-testi-button-next",
			prevEl: ".da-testi-button-prev",
		},

	});
	var swiper = new Swiper(".app-testi-active", {
		loop: true,
		slidesPerView: "auto",
		// centeredSlides: true,
		spaceBetween: 50,
		centeredSlides: true,
		slidesPerView: 2,
		// If we need pagination
		pagination: {
			el: ".app-testi-pagenation",
			// dynamicBullets: true,
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".app-testi-button-next",
			prevEl: ".app-testi-button-prev",
		},
		breakpoints: {

			'1200': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},


	});
	var swiper = new Swiper(".shop-swipper-slider-active", {
		loop: true,
		slidesPerView: "auto",
		// centeredSlides: true,
		spaceBetween: 30,
		slidesPerView: 4,
		// If we need pagination
		// Navigation arrows
		navigation: {
			nextEl: ".pd-sd-button-next",
			prevEl: ".pd-sd-button-prev",
		},
		breakpoints: {

			'1200': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},


	});

	var swiper = new Swiper('.swiper--top', {
		spaceBetween: 0,
		centeredSlides: true,
		speed: 30000,
		slidesPerView: 1,
		autoplay: {
			delay: 1,
		},
		loop: true,
		freeMode: true,
		slidesPerView: 'auto',
		allowTouchMove: false,
		disableOnInteraction: true,
	});
	var swiper = new Swiper(".tp-gl-silder", {
		spaceBetween: 30,
		centeredSlides: true,
		speed: 6000,
		autoplay: {
		  delay: 1,
		},
		loop: true,
		slidesPerView: 'auto',
		allowTouchMove: false,
		disableOnInteraction: true
	});
	let SwiperBottom = new Swiper('.tp-gl-silder-2', {
		spaceBetween:30,
		centeredSlides: true,
		speed: 6000,
		autoplay: {
		  delay: 1,
		  reverseDirection: true
		},
		loop: true,
		slidesPerView: 'auto',
		allowTouchMove: false,
		disableOnInteraction: true
	  });
	  
	  
	////////////////////////////////////////////////////
	// 07. Data CSS Js 
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	////////////////////////////////////////////////////
	// 08. Nice Select Js
	$('select').niceSelect();



	////////////////////////////////////////////////////
	// 09. Magific Popup
	$('.bs-project-popup').magnificPopup({
		type: 'image'
		// other options
	});
	$('.ptg-portfilo').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true,
		}
	});
	$('.mp-portfolio-gl').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true,
		}
	});
	$(".popup-video").magnificPopup({
		type: "iframe",
	});



	////////////////////////////////////////////////////
	// 10. Sidebar Js
	$(".tp-header-nav").on("click", function () {
		$(".tp-offcanvas").addClass("opened");
		$(".body-overlay").addClass("opened");
	});
	$(".tp-offcanvas-close").on("click", function () {
		$(".tp-offcanvas").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});

	$('.close-btns').on('click', function () {
		$('.tost-box-area').slideToggle(1000);
	});

	////////////////////////////////////////////////////
	// 11. Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".tp-offcanvas").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 12. Image loader
	$('.tp-portfolio-isotop-active').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.tp-portfolio-isotop-active').isotope({
			itemSelector: '.tp-portfolio-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.tp-portfolio-item',
			}
		});


		// filter items on button click
		$('.tp-pf-btn-group').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.tp-pf-btn-group button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});
	$('.tp-portfolio-msn-active').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.tp-portfolio-msn-active').isotope({
			itemSelector: '.tp-portfolio-item',
			layoutMode: 'fitRows',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: 1,
			}
		});


		// filter items on button click
		$('.tp-pf-btn-group').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
		//for menu active class
		$('.tp-pf-btn-group button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});


	////////////////////////////////////////////////////
	// 13. js - tilt

	if ($(".js-tilt").length) {

		$('.js-tilt').tilt();

	}

	////////////////////////////////////////////////////
	// 13. Counter up
	$('.counter-up').counterUp({
		delay: 10,
		time: 1000
	});

	////////////////////////////////////////////////////
	// 14. Cart Quantity Js
	$('.cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});

	////////////////////////////////////////////////////
	// 20. Show Login Toggle Js
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 14. back to top
	var btn = $('#tp-backto-top');
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});
	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');
	});

	////////////////////////////////////////////////////
	// 14. back to top
	$('.tp-btn-hover')
		.on('mouseenter', function (e) {
			var parentOffset = $(this).offset(),
				relX = e.pageX - parentOffset.left,
				relY = e.pageY - parentOffset.top;
			$(this).find('b').css({ top: relY, left: relX })
		})
	$('.tp-btn-hover').on('mouseout', function (e) {

		var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		$(this).find('b').css({ top: relY, left: relX })

	})
})(jQuery);


