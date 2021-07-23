
<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="img/favicon.html">

    <!-- SITE TITLE -->
    <title>ساير</title>
    <!-- Bootstrap min CSS -->
    <link href="{{ asset('assets/front/Content/vendor/bootstrap.min.css')}}" rel="stylesheet">

    <!-- rtl classes -->
    <link href="{{ asset('assets/front/Content/vendor/bootstrap-rtl.min.css')}}" rel="stylesheet" title="rtlcss">

    <!-- Animate CSS -->
    <link href="{{ asset('assets/front/Content/vendor/animate.css')}}" rel="stylesheet">
    <!-- Icofont CSS -->
    <link href="{{ asset('assets/front/Content/vendor/icofont.css')}}" rel="stylesheet">
    <!-- Owl Carouse CSS -->
    <link href="{{ asset('assets/front/Content/vendor/owl.carousel.css')}}" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="{{ asset('assets/front/Content/vendor/magnific-popup.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/front/Content/style.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/front/Content/responsive.css')}}" rel="stylesheet">
    <!-- custom CSS -->
    <link href="{{ asset('assets/front/Content/custom.css')}}" rel="stylesheet">

    <!-- rtl classes -->
    <link href="{{ asset('assets/front/Content/custom-rtl.css')}}" rel="stylesheet" title="rtlcss">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/front/Scripts/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="appconfig.html"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/bootstrap.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/owl.carousel.min.js')}}"></script>
    <!-- Jquery Counterup JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/jquery.counterup.min.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/waypoints.min.js')}}"></script>
    <!-- jquery.magnific-popup JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/jquery.magnific-popup.min.js')}}"></script>
    <!-- Parsley JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/parsley.min.js')}}"></script>
    <!-- Jquery Particleground JS -->
    <script src="{{ asset('assets/front/Scripts/vendor/jquery.particleground.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/front/Scripts/custom.js')}}"></script>


            <!-- rtl classes -->
            <link href="{{ asset('assets/front/Content/vendor/bootstrap-rtl/bootstrap-rtl.css')}}" rel="stylesheet" />
            <link href="{{ asset('assets/front/Content/vendor/bootstrap-rtl/custom-bootstrap-rtl.css')}}" rel="stylesheet" />
            <link href="{{ asset('assets/front/Content/custom-rtl.css')}}" rel="stylesheet" />
            <!-- Responsive CSS -->
            <link href="{{ asset('assets/front/Content/responsive.css')}}" rel="stylesheet">
            <script type="text/javascript">
                $('html').attr('dir', 'rtl');
                //  $('.nav.navbar-nav').addClass('navbar-right')
                $(document).ready(function () {


                    $('.nav.navbar-nav').removeClass('navbar-right')
                    $('body').css('font-family', 'Segoe UI')
                    $('p').css('font-family', 'Segoe UI')

                });



            </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('.slide-btn-white, .slide-btn-bordered, .default-button').on('click', function (e) {
                var anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(anchor.attr('href')).offset().top - 30
                }, 1500);
                e.preventDefault();
            });


            $(function () {
                var $rtl_boostrap = $('link[href="/Content/vendor/bootstrap-rtl.min.css"]');
                var $rtl_custom = $('link[href="/Content/custom-rtl.css"]');
                toggle = true;

                $('link[title=rtlcss]')[0].disabled = true;
                $('link[title=rtlcss]')[1].disabled = true;

                $('#arabic').click(function () {
                    if (toggle) {
                        $rtl_boostrap.removeAttr('disabled');
                        $rtl_custom.removeAttr('disabled');
                        $('html').attr('dir', 'rtl');
                    } else {
                        $rtl_boostrap.attr('disabled', 'disabled');
                        $rtl_custom.attr('disabled', 'disabled');
                        $('html').attr('dir', 'ltr');
                    }
                    toggle = !toggle;
                });
            });
        });

        // detect visitor country
        $(function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(getLocation);
            } else {
                //$('#loc').html('Geolocation is not supported by your browser.');
            }

            function getLocation(loc) {
                var latitude = loc.coords.latitude;
                var longitude = loc.coords.longitude;
                $.getJSON("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + latitude + "," + longitude, function (data) {
                    data.results.reverse();
                    // alert(data.results[0].formatted_address);
                });
            }
        });
    </script>
</head>


<body data-spy="scroll" data-offset="70">
    <!-- START PRELOADER -->
      <div class="page-content">
        @if(View::hasSection('content'))
            @yield('content')
        @else
            <!-- START NAVBAR -->
            @include('site.navbar')
            <!-- END NAVBAR -->
            <!-- START HOMEPAGE SLIDER -->
            @include('site.homepage')
            <!-- END HOMEPAGE SLIDER -->
            <!-- START APP ABOUT SECTION -->
            @include('site.app_about')
            <!-- END APP ABOUT SECTION -->
            <!-- START HOW IT WORKS SECTION -->
            @include('site.how-it-works')
            <!-- END HOW IT WORKS SECTION -->
            <!-- START sayer Now SECTION -->
            @include('site.about')
            <!-- END sayer Now SECTION -->
            <!-- START APP DOWNLOAD SECTION -->
            @include('site.download')
            <!-- END APP DOWNLOAD SECTION -->
            <!-- START BLOG SECTION -->
            @include('site.blog')
            <!-- END BLOG SECTION -->
            <!-- START FOOTER AREA -->
            @include('site.footer')
            <!-- END FOOTER AREA -->
        @endif
     </div>
    <!-- END PRELOADER -->   
</body>
   

<!-- Mirrored from www.ساير للشحن.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jul 2020 19:54:43 GMT -->
</html>


