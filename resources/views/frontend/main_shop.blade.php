<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
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

        <!-- Start Content -->
        <section class="flat-row main-shop shop-slidebar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar slidebar-shop">
                            <div class="widget widget-search">
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </div><!-- /.widget-search -->
                            <h1 class="h2 pb-4">Categories</h1>
                            <div id="jquery-accordion-menu" class="jquery-accordion-menu white">
                                <div class="jquery-accordion-menu-header"></div>
                                <ul>
                                    <li class="active"><a href="">ACCESSORIES</a>
                                        <ul class="submenu">
                                            <li><a href="/product-types/accessories/40">Covers</a></li>
                                            <li><a href="#">Handlebar Accessories</a>
                                                <ul class="submenu">
                                                    <li><a href="/product-types/accessories/8">Phone & Device Mounts</a></li>
                                                    <li><a href="#">Clocks</a></li>
                                                    <li><a href="#">Bar Ends</a></li>
                                                    <li><a href="#">Grips</a></li>
                                                    <li><a href="#">Heated Grips</a></li>
                                                    <li><a href="#">Mirrors</a></li>
                                                    <li><a href="#">Muffs</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/product-types/accessories/15">Battery Care & Power<br>Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">HELMETS</a>
                                        <ul class="submenu">
                                            <li><a href="/product-types/accessories/1/mt">MT Helmets</a></li>
                                            <li><a href="/product-types/accessories/1/hjc">HJC</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">SECURITY</a><span class="jquery-accordion-menu-label"></span>
                                        <ul class="submenu">
                                            <li><a href="#">Lever Locks</a></li>
                                            <li><a href="#">Chain Locks & Chains</a></li>
                                            <li><a href="#">Anchors</a></li>
                                            <li><a href="#">Cable Locks</a></li>
                                            <li><a href="#">Disc Locks & Padlocks</a></li>
                                            <li><a href="#">HJC</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">LUGGAGE</a>
                                        <ul class="submenu">
                                            <li><a href="#">Helmet & Boot Carriers</a></li>
                                            <li><a href="#">Panniers</a></li>
                                            <li><a href="#">Luggage Accessories</a>
                                            <li><a href="#">Consulting</a></li>
                                            <li><a href="#">Tail Packs</a></li>
                                            <li><a href="#">Tank Bags</a></li>
                                            <li><a href="#">Waist & Leg Bags</a></li>
                                            <li><a href="#">Top Boxes</a></li>
                                            <li><a href="#">Sat Nav Holder</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">RIDER WEAR</a>
                                        <ul class="submenu">
                                            <li><a href="#">ARMR</a></li>
                                            <li><a href="#">Dojo</a></li>
                                            <li><a href="#">Alpinestars</a></li>
                                            <li><a href="#">Oxford</a></li>
                                            <li><a href="#">Spartan</a></li>
                                            <li><a href="#">Bull-it</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">GPS TRACKER</a></li>
                                    <li><a href="#">TYRES</a></li>
                                </ul>
                                <div class="jquery-accordion-menu-footer"></div>
                            </div><!-- /.widget -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-3 -->

                    @yield('content')

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

                <!-- Javascript -->
                <script src="{{ asset('storage/assets-frontend/javascript/jquery.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/tether.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/bootstrap.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery.easing.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/parallax.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery-waypoints.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery-countTo.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery.countdown.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery.flexslider-min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/images-loaded.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery.isotope.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/magnific.popup.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery.hoverdir.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/equalize.min.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/gmap3.min.js') }}"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/jquery-ui.js') }}"></script>

                <script src="{{ asset('storage/assets-frontend/javascript/jquery.cookie.js') }}"></script>
                <script src="{{ asset('storage/assets-frontend/javascript/main.js') }}"></script>
                <script src="{{ asset('storage/assets/js/templatemo.js') }}"></script>
                <script src="{{ asset('storage/accordion-menu/js/jquery-1.11.1.js') }}"></script>
                <script src="{{ asset('storage/accordion-menu/js/jquery-accordion-menu.js') }}"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        jQuery("#jquery-accordion-menu").jqueryAccordionMenu();
                        jQuery(".colors a").click(function() {
                            if ($(this).attr("class") != "default") {
                                $("#jquery-accordion-menu").removeClass();
                                $("#jquery-accordion-menu").addClass("jquery-accordion-menu").addClass($(this).attr("class"));
                            } else {
                                $("#jquery-accordion-menu").removeClass();
                                $("#jquery-accordion-menu").addClass("jquery-accordion-menu");
                            }
                        });
                    });
                </script>

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