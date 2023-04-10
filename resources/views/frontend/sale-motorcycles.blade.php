@extends('frontend.main_master')

@section('content')

<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">New & Used Motorcycles</h1>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">Honda & Yamaha Specialists</a></li>
                        <li><a href="/sale-motorcycles">Motorcycle Sales</a></li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<section class="flat-row main-shop shop-slidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar slidebar-shop">
                    <div class="widget widget-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </div><!-- /.widget-search -->
                    <div class="widget widget-sort-by">
                        <h5 class="widget-title">
                            SORT BY
                        </h5>
                        <ul>
                            <li class="active"><a href="#" data-filter="*">ALL MODELS</a></li>
                            <li><a href="#" data-filter=".new">NEW MOTORCYCLES</a></li>
                            <li><a href="#">USED MOTORCYCLES</a></li>
                            <!-- li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: low to high</a></li>
                            <li><a href="#">Price: high to low</a></li -->
                        </ul>
                    </div><!-- /.widget-sort-by -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-9">
                <div class="filter-shop clearfix">
                    <p class="showing-product float-right">
                        Showing 1–12 of 56 Products
                    </p>
                </div><!-- /.filte-shop -->
                <div class="product-content product-threecolumn product-slidebar clearfix">
                    <ul class="product style2 sd1">
                        <li class="product-item new">
                            <div class="product-thumb clearfix">
                                <a href="#">
                                    <img src="{{url('assets/images/rentals/2022-Yamaha-YZF1000R1-EU-Yamaha_Black-Studio-001-03.jpg')}}" alt="image">
                                </a>
                                <span class="new">New</span>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">YAMAHA R1</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Super Sport</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-MT125-EU-Icon_Blue_-Studio-001-03.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">YAMAHA MT125</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Hyper Naked</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-G125YM-EU-Ruby_Red-Studio-001-03.jpg')}}" alt="image">
                                </a>
                                <span class="new">New</span>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">YAMAHA NMAX 125</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Urban Mobility</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-G125YM-EU-Milky_White-Studio-001-03.jpg')}}" alt="image">
                                </a>
                                <span class="new sale">Sale</span>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">YAMAHA NMAX 125</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Urban Mobility</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-G125YM-EU-Deep_Blue-Studio-001-03.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">HONDA PCX 125</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Urban Mobility</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-G125YM-EU-Milky_White-Studio-001-03.jpg')}}" alt="image">
                                </a>
                                <span class="new sale">Sale</span>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">HONDA PCX 125</span>
                                <div class="price">
                                    <del>
                                        <ins>
                                            <span class="amount">£5000.00</span>
                                        </ins>
                                </div>
                            </div>
                            <span class="regular">Urban Mobility</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2022-Yamaha-YZF1000R1-EU-Icon_Blue-Studio-001-03.jpg')}}" alt="image">
                                </a>
                                <span class="new sale">Sale</span>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">YAMAHA R1</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Super Sport</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-G125YM-EU-Ruby_Red-Studio-001-03.jpg')}}" alt="image">
                                </a>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">HONDA PCX 125</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Urban Mobility</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="#" class="product-thumb">
                                    <img src="{{url('assets/images/rentals/2023-Yamaha-G125YM-EU-Deep_Blue-Studio-001-03.jpg')}}" alt="image">
                                </a>
                                <span class="new sale">Sale</span>
                            </div>
                            <div class="product-info clearfix">
                                <span class="product-title">HONDA PCX 125</span>
                                <div class="price">
                                    <ins>
                                        <span class="amount">£5000.00</span>
                                    </ins>
                                </div>
                            </div>
                            <span class="regular">Urban Mobility</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                    </ul><!-- /.product -->
                </div><!-- /.product-content -->
                <div class="product-pagination text-center clearfix">
                    <ul class="flat-pagination">
                        <li class="prev">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li class="active"><a href="#" title="">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul><!-- /.flat-pagination -->
                </div>
            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-row -->

@endsection