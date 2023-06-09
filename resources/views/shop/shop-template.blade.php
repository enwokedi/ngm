@extends('frontend.main_shop')

@section('title', 'Page Title')

@section('content')
<div class="col-md-9">
    <div class="filter-shop clearfix">
        <p class="showing-product float-right">
            7 Categories with 1000's of Products
        </p>
    </div><!-- /.filte-shop -->
    <div class="product-content product-threecolumn product-slidebar clearfix">
        <ul class="product style2 sd1">
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/product-accessories">
                        <img src="{{asset('assets-shop/product-type/5179734-cat_motorcycle_product_type_accessories-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/product-accessories">ACCESSORIES</a>
                </div>
            </li>
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/product-accessories">
                        <img src="{{asset('assets-shop/product-type/5179767-cat_motorcycle_product_type_helmets-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/accessories">HELMETS</a>
                </div>
            </li>
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/accessories">
                        <img src="{{asset('assets-shop/product-type/5179907-cat_motorcycle_product_type_security-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/accessories">SECURITY</a>
                </div>
            </li>
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/accessories">
                        <img src="{{asset('assets-shop/product-type/5179798-cat_motorcycle_product_type_luggage-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/accessories">LUGGAGE</a>
                </div>
            </li>
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/accessories">
                        <img src="{{asset('assets-shop/product-type/5179810-cat_motorcycle_product_type_rider_wear-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/accessories">RIDER WEAR</a>
                </div>
            </li>
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/accessories">
                        <img src="{{asset('assets-shop/product-type/5179914-cat_motorcycle_product_type_tracker-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/accessories">GPS TRACKER</a>
                </div>
            </li>
            <li class="product-item new">
                <div class="product-thumb clearfix">
                    <a href="/accessories">
                        <img src="{{asset('assets-shop/product-type/5179734-cat_motorcycle_product_type_accessories-2-3-367.jpg')}}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title"></span>
                </div>
                <span class="regular"></span>
                <div class="add-to-cart text-center">
                    <a href="/accessories">TYRES</a>
                </div>
            </li>
        </ul><!-- /.product -->
    </div><!-- /.product-content-->
    <div class="product-pagination text-center clearfix">
        <ul class="flat-pagination">
            <li class="prev">
                <a href="#"><i class="fa fa-angle-left"></i></a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul><!-- /.flat-pagination -->
    </div>
</div><!-- /.col-md-9 -->

</div><!-- /.container -->
</section><!-- /.flat-row -->
<!-- End Page Content -->

@stop