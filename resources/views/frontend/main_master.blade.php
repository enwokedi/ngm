<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-UK" lang="en-UK"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->

<!-- Head -->

@include('frontend.body.head')

<!-- End Head -->

<body class="header_sticky header-style-2 has-menu-extra">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        <!-- /#site-header-wrap -->

        @include('frontend.body.header')

        <!-- End /#site-header-wrap -->

        <!-- Page Content -->

        @yield('content')

        <!-- End Page Content -->

        <!-- Newsletter -->

        @include('frontend.body.newsletter')

        <!-- End Newsletter -->

        <!-- Footer -->

        @include('frontend.body.footer')

        <!-- End Footer -->

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

    </div>
    <!-- frontend/javascript -->
    <script src="{{asset('frontend/javascript/jquery.min.js')}}"></script>
    <script src="frontend/javascript/tether.min.js"></script>
    <script src="frontend/javascript/bootstrap.min.js"></script>
    <script src="frontend/javascript/jquery.easing.js"></script>
    <script src="frontend/javascript/parallax.js"></script>
    <script src="frontend/javascript/jquery-waypoints.js"></script>
    <script src="frontend/javascript/jquery-countTo.js"></script>
    <script src="frontend/javascript/jquery.countdown.js"></script>
    <script src="frontend/javascript/jquery.flexslider-min.js"></script>
    <script src="frontend/javascript/images-loaded.js"></script>
    <script src="frontend/javascript/jquery.isotope.min.js"></script>
    <script src="frontend/javascript/magnific.popup.min.js"></script>
    <script src="frontend/javascript/jquery.hoverdir.js"></script>
    <script src="frontend/javascript/owl.carousel.min.js"></script>
    <script src="frontend/javascript/equalize.min.js"></script>
    <script src="frontend/javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
    <script src="frontend/javascript/jquery-ui.js"></script>

    <script src="frontend/javascript/jquery.cookie.js"></script>
    <script src="frontend/javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="frontend/rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="frontend/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="frontend/javascript/rev-slider.js"></script>

    <!-- Accordion Menu -->
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="frontend/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="frontend/rev-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

</html>