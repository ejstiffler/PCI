$(document).ready(function () {

	// on successful signup

	//$('#successAlert').hide();

	"use strict"; // Start of use strict

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(document).on('click', 'a.page-scroll', function (event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: ($($anchor.attr('href')).offset().top - 50)
		}, 1250, 'easeInOutExpo');
		event.preventDefault();
	});

	// Highlight the top nav as scrolling occurs
	$('body').scrollspy({
		target: '.navbar-fixed-top',
		offset: 51
	});

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').click(function () {
		$('.navbar-toggle:visible').click();
	});

	// Offset for Main Navigation
	$('#mainNav').affix({
		offset: {
			top: 100
		}
	})

	// Initialize and Configure Scroll Reveal Animation
	window.sr = ScrollReveal();
	sr.reveal('.sr-icons', {
		duration: 600,
		scale: 0.3,
		distance: '0px'
	}, 200);
	sr.reveal('.sr-button', {
		duration: 1000,
		delay: 200
	});
	sr.reveal('.sr-contact', {
		duration: 600,
		scale: 0.3,
		distance: '0px'
	}, 300);

	// Initialize and Configure Magnific Popup Lightbox Plugin
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});

	// Signup form Validation

	var validator = $("#registration-form").bootstrapValidator({

		fields: {
			username: {
				message: "Username must be entered",
				validators: {
					notEmpty: {
						message: "Please provide a use",
					},
					stringLength: {
						min: 4,
						max: 10,
						message: "Username must be between 4 and 10 characters long"
					},
					notdigits: {
						message: "Username can not be digits"
					}

				}
			},
			email: {
				message: "Email address is required",
				validators: {
					notEmpty: {
						message: "Please provide an email address"
					},
					stringLength: {
						min: 6,
						max: 35,
						message: "Email must be between 6 to 35 characters long"
					},
					different: {
						field: "password",
						message: "Email and Password must be different"
					},
					emailAddress: {
						message: "Email Address is invalid"
					}
				}
			}
		}

	});





}); // End of use strict