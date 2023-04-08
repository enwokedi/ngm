@extends('frontend.main_master')

@section('title', 'Product Types')

@section('content')

<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Product Types</h1>
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
                    <h1 class="h2 pb-4">CATEGORIES</h1>
                    <div id="jquery-accordion-menu" class="jquery-accordion-menu white">
                        <div class="jquery-accordion-menu-header"></div>
                        <ul>
                            <li class="active"><a href="">ACCESSORIES</a>
                                <ul class="submenu">
                                    <li><a href="#">Phone & Device Mounts</a></li>
                                    <li><a href="#">Covers</a></li>
                                    <li><a href="#">Handlebar Accessories</a>
                                        <ul class="submenu">
                                            <li><a href="#">Phone Accessories</a></li>
                                            <li><a href="#">Clocks</a></li>
                                            <li><a href="#">Bar Ends</a></li>
                                            <li><a href="#">Grips</a></li>
                                            <li><a href="#">Heated Grips</a></li>
                                            <li><a href="#">Mirrors</a></li>
                                            <li><a href="#">Muffs</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">HELMETS</a>
                                <ul class="submenu">
                                    <li><a href="#">MT Helmets</a></li>
                                    <li><a href="#">Simpson</a></li>
                                    <li><a href="#">Alpinestars</a></li>
                                    <li><a href="#">Box</a></li>
                                    <li><a href="#">U Locks</a></li>
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
@stop

@extends('frontend.main_shop')

@section('title', 'Page Title')

@section('content')
<div class="col-md-9">
    <div class="filter-shop clearfix">
        <p class="showing-product float-right">
            7 Categories with 1000's of Products
        </p>
    </div><!-- /.filter-shop -->
    <div class="product-content product-threecolumn product-slidebar clearfix">
        <ul class="product style2 sd1">
            <!-- foreach with array chunk 3 (columns) -->
            @foreach($products as $product)
            <li class="product-item">
                <div class="product-thumb clearfix">
                    <a href="#">
                        <img src="/product-types/accessories/{{strtolower($category)}}/{{ $product->id }}" alt="image">
                    </a>
                </div>
                <div class="product-info clearfix">
                    <span class="product-title">{{ $product->description }}</span>
                    <div class="price">
                        <ins>
                            <span class="amount">£{{ $product->vat_price }}</span>
                        </ins>
                    </div>
                </div>
                <div class="add-to-cart text-center">
                    <a href="#">ADD TO CART</a>
                </div>
                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
            </li>
            @endforeach
        </ul><!-- /.product -->
    </div><!-- /.product-content -->
    <div class="product-pagination text-center clearfix">
        <ul class="flat-pagination">
            {{ $products->links('pagination::bootstrap-5') }}
        </ul><!-- /.flat-pagination -->
    </div>
</div><!-- /.col-md-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.flat-row -->
<!-- End Page Content -->

@stop