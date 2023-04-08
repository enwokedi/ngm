<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->

<!-- Head -->

@include('shop.body.shop-head')

<!-- End Head -->

<body class="header_sticky header-style-2 has-menu-extra">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        <!-- /#site-header-wrap -->

        @include('shop.body.shop-header')

        <!-- End /#site-header-wrap -->

        <!-- Page Title & Breadcrumbs -->
        <div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">@yield('title')</h1>
                        </div><!-- /.page-title-heading -->
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Honda & Yamaha Specialists</a></li>
                                <li class="active"><a href="/product-types">Product Types</a></li>
                            </ul>
                        </div><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <!-- Page Content -->

        @yield('content')

        <!-- End Page Content -->

        <!-- Footer -->

        @include('shop.body.footer')

        <!-- End Footer -->

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

    </div>

    <!-- Javascript -->
    <script>
        'use strict';
        $(document).ready(function() {

            // Accordion
            var all_panels = $('.templatemo-accordion > li > ul').hide();

            $('.templatemo-accordion > li > a').click(function() {
                console.log('Neguinho Motors');
                var target = $(this).next();
                if (!target.hasClass('active')) {
                    all_panels.removeClass('active').slideUp();
                    target.addClass('active').slideDown();
                }
                return false;
            });
            // End accordion

            // Product detail
            $('.product-links-wap a').click(function() {
                var this_src = $(this).children('img').attr('src');
                $('#product-detail').attr('src', this_src);
                return false;
            });
            $('#btn-minus').click(function() {
                var val = $("#var-value").html();
                val = (val == '1') ? val : val - 1;
                $("#var-value").html(val);
                $("#product-quanity").val(val);
                return false;
            });
            $('#btn-plus').click(function() {
                var val = $("#var-value").html();
                val++;
                $("#var-value").html(val);
                $("#product-quanity").val(val);
                return false;
            });
            $('.btn-size').click(function() {
                var this_val = $(this).html();
                $("#product-size").val(this_val);
                $(".btn-size").removeClass('btn-secondary');
                $(".btn-size").addClass('btn-success');
                $(this).removeClass('btn-success');
                $(this).addClass('btn-secondary');
                return false;
            });
            // End product detail

        });
    </script>

    <script src="{{ asset('assets-frontend/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/tether.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/parallax.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/jquery-countTo.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/jquery.flexslider-min.js') }}"></script>
    <!-- <script src="{{ asset('assets-frontend/javascript/images-loaded.js') }}"></script> -->
    <script src="{{ asset('assets-frontend/javascript/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/magnific.popup.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/equalize.min.js') }}"></script>
    <!-- <script src="{{ asset('assets-frontend/javascript/gmap3.min.js') }}"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script> -->
    <script src="{{ asset('assets-frontend/javascript/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets-frontend/javascript/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <!-- <script src="{{ asset('assets-frontend/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/javascript/rev-slider.js') }}"></script> -->
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <!-- <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script> -->
</body>

</html>