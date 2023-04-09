<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-UK" lang="en-UK"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->

@include('frontend.body.head')

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
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->

<!-- <script src="frontend/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="frontend/rev-slider/js/extensions/revolution.extension.video.min.js"></script> -->
</body>

</html>