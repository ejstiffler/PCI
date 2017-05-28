$(document).ready(function () {


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
                message: "Username must be entered", // general message and will always be executed if any validation role is not applied
                // validation Roles
                validators: {
                    notEmpty: {
                        message: "Please provide a username",
                    },
                    stringLength: {
                        min: 4,
                        message: "Username must be atleast 4 characters long"
                    },
                }
            },
            email: {
                message: "Email address is required",
                validators: {
                    notEmpty: {
                        message: "Please provide an email address"
                    },
                    different: {
                        field: "password",
                        message: "Email and Password must be different"
                    },
                    emailAddress: {
                        message: "Email Address is invalid"
                    },
                }
            },
            cnic: {
                message: "CNIC field is required",
                validators: {
                    notEmpty: {
                        message: "Pelase provide CNIC number"
                    },
                    regexp: {

                        regexp: /\d{5}-\d{7}-\d{1}/,
                        message: "Please provide correct CNIC number along with (-)"
                    },
                }
            },
            passport: {
                message: "Passport field is required",
                validators: {
                    notEmpty: {
                        message: "Pelase enter passport number"
                    },
                    regexp: {

                        regexp: /[a-zA-Z]{2}[0-9]{7}/,
                        message: "Please provode correct passport number "
                    },
                }

            },
            password: {
                message: "Password is required",
                validators: {
                    notEmpty: {
                        message: "Pelase enter password"
                    },
                    stringLength: {
                        min: "4",
                        message: "Password must be 4 characters long"
                    },
                    regexp: {

                        regexp: /(?=.*[a-zA-Z])(?=.*[0-9])/,
                        message: "password must contain atleast one numeric digit"
                    },
                }

            },
            confirmpassword: {
                message: "Please confirm your password",
                validators: {

                    identical: {
                        field: "password",
                        message: "Confirm password is not same"
                    }

                }
            }
        }

    });

    // Login Form Validation
    var validator2 = $("#loginForm").bootstrapValidator({

        fields: {
            cnic: {
                message: "CNIC field is required",
                validators: {
                    notEmpty: {
                        message: "Pelase provide CNIC number"
                    },
                    regexp: {

                        regexp: /\d{5}-\d{7}-\d{1}/,
                        message: "Please provide correct CNIC number along with (-)"
                    },
                }
            },
            password: {
                message: "Password is required",
                validators: {
                    notEmpty: {
                        message: "Pelase enter password"
                    },
                    stringLength: {
                        min: "4",
                        message: "Password must be 4 characters long"
                    },
                    regexp: {

                        regexp: /(?=.*[a-zA-Z])(?=.*[0-9])/,
                        message: "password must contain atleast one numeric digit"
                    },
                }

            }
        }

    });


}); // End of use strict