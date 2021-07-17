(function($) {
    "use strict";
    jQuery(document).on('ready', function() {
        $(window).on('scroll', function() {
                if ($(this).scrollTop() > 60) {
                    $('.top-menu').addClass('menu-shrink');
                } else {
                    $('.top-menu').removeClass('menu-shrink');
                }
            });
        $('.nav li a').on('click', function(e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top-50
            }, 1500);
            e.preventDefault();
        });
        $(document).on('click', '.navbar-collapse.in', function(e) {
            if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
                $(this).collapse('hide');
            }
        });
        $(".homepage-slides").owlCarousel({
            items: 1,
            nav: false,
            dots: false,
            touchDrag: false,
            mouseDrag: false,
            autoplay: false,
            animateOut: 'fadeOut',
            autoplayHoverPause: false,
            loop: false,
            singleItem:true,
            navText: ["<i class='icofont icofont-long-arrow-left'></i>", "<i class='icofont icofont-long-arrow-right'></i>"],
        });
        $(".homepage-slides").on("translate.owl.carousel", function() {
            $(".single-slider-item h1, .single-slider-item p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".single-slider-item .slide-button a").removeClass("animated fadeInDown").css("opacity", "0");
        });
        $(".homepage-slides").on("translated.owl.carousel", function() {
            $(".single-slider-item h1, .single-slider-item p").addClass("animated fadeInUp").css("opacity", "1");
            $(".single-slider-item .slide-button a").addClass("animated fadeInDown").css("opacity", "1");
        });
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: false,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 300,
            preloader: false,
            fixedContentPos: false,
        });
        $('.counter-number').counterUp({
            delay: 10,
            time: 1000,
        });
        $(".screenshot-carousel").owlCarousel({
            items: 4,
            nav: true,
            margin: 30,
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            loop: true,
            navText: ["<i class='icofont icofont-bubble-left'></i>", "<i class='icofont icofont-bubble-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
        $(".testimonial-carousel").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true,
            loop: true,
            navText: ["<i class='icofont icofont-bubble-left'></i>", "<i class='icofont icofont-bubble-right'></i>"]
        });
        $(".screenshot-image, .lightbox-gallery").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
            }
        });
        $(".faq-panel > .faq-title").on("click", function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass("active");
                $(this).siblings('.faq-textarea').slideUp(200);
                $(".faq-panel > .faq-title i").removeClass("icofont-minus").addClass("icofont-plus");
            } else {
                $(".faq-panel > .faq-title i").removeClass("icofont-minus").addClass("icofont-plus");
                $(this).find("i").removeClass("icofont-plus").addClass("icofont-minus");
                $(".faq-panel > .faq-title").removeClass("active");
                $(this).addClass("active");
                $('.faq-textarea').slideUp(200);
                $(this).siblings('.faq-textarea').slideDown(200);
            }
        });
        $('body').append('<div id="toTop" class="back-top-button"><i class="icofont icofont-arrow-up"></i></div>');
        $(window).scroll(function() {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
        $('#contatc_form').parsley();
        
        jQuery(function() {
            jQuery('body').on('keydown', '#contact_name, #contact_email, #contact_subject, #contact_phone, #contact_message', function(e) {
                console.log(this.value);
                if (e.which === 32 && e.target.selectionStart === 0) {
                    return false;
                }
            });
        });
        $('#particles').particleground({
            dotColor: '#5cbdaa',
            lineColor: '#5cbdaa'
        });
        $('.intro').css({
            'margin-top': -($('.intro').height() / 2)
        });
        $('#contatc_form').submit(function(event) {
            event.preventDefault();
            var name = $('#contact_name').val();
            var email = $('#contact_email').val();
            var sub = $('#contact_subject').val();
            var message = $('#contact_message').val();
            var recaptcha = $("#g-recaptcha-response").val();
            if (name == "" || email == "" || message == "" || name == "" || message == "" || recaptcha == "" || sub == "") {
                jQuery('#contact_send_status').removeClass('message_send');
                jQuery('#contact_send_status').addClass('message_notsend');
                jQuery('#contact_send_status').text('Please fill all fields with correct data.');
            } else {
                var formData = $('#contatc_form').serialize();
                $.ajax({
                    type: 'POST',
                    url: $('#contatc_form').attr('action'),
                    data: formData,
                    success: function(data) {
                        jQuery('form[name="myform"]')[0].reset();
                        //grecaptcha.reset();
                        $("#g-recaptcha-response").val("");
                    },
                }).done(function(response) {
                    $('#contact_send_status').removeClass('message_notsend');
                    $('#contact_send_status').addClass('message_send');
                    $('#contact_send_status').html("<div class='alert alert-success' role='alert'>Your email successfully Sent! Thank you.</div>");
                    $("#contact_send_status").fadeOut(3000);
                }).fail(function(data) {
                    jQuery('#contact_send_status').removeClass('message_send');
                    jQuery('#contact_send_status').addClass('message_notsend');
                    jQuery('#contact_send_status').html("<div class='alert alert-danger' role='alert'>Something wrong please try again!</div>");
                });
            }
        });
    });
    jQuery(window).on('load', function() {
        jQuery(".preloader-wrap").fadeOut(500);
    });
}(jQuery));
