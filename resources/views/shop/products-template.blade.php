@extends('frontend.main_master')

@section('title', 'Product Types')

@section('content')
<!-- Page title -->
<div class="page-title parallax parallax1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Products</h1>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">Honda & Yamaha Specialists</a></li>
                        <li><a href="/product-types">Product Types</a></li>
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
                            Sort By
                        </h5>
                        <ul>
                            <li><a href="#" class="active">Default</a></li>
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: low to high</a></li>
                            <li><a href="#">Price: high to low</a></li>
                        </ul>
                    </div><!-- /.widget-sort-by -->
                    <div class="widget widget-color">
                        <h5 class="widget-title">
                            Colors
                        </h5>
                        <ul class="flat-color-list icon-left">
                            <li><a href="#" class="yellow"></a><span>Yellow</span> <span class="pull-right">25</span></li>
                            <li><a href="#" class="pink"> </a><span>White</span> <span class="pull-right">16</span></li>
                            <li><a href="#" class="red active"></a><span>Red</span> <span class="pull-right">28</span></li>
                            <li><a href="#" class="black"></a><span>Black</span> <span class="pull-right">12</span></li>
                            <li><a href="#" class="blue"></a><span>Green</span> <span class="pull-right">0</span></li>
                        </ul>
                    </div><!-- /.widget-color -->
                    <div class="widget widget-size">
                        <h5 class="widget-title">
                            Size
                        </h5>
                        <ul>
                            <li class="checkbox">
                                <input type="checkbox" name="checkbok1" id="checkbox1">
                                <label for="checkbox1">
                                    <a href="#">L</a>
                                </label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" name="checkbok2" id="checkbox2">
                                <label for="checkbox2">
                                    <a href="#">M</a>
                                </label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" name="checkbok3" id="checkbox3">
                                <label for="checkbox3">
                                    <a href="#">S</a>
                                </label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" name="checkbok4" id="checkbox4">
                                <label for="checkbox4">
                                    <a href="#">X</a>
                                </label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" name="checkbok5" id="checkbox5">
                                <label for="checkbox5">
                                    <a href="#">XL</a>
                                </label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" name="checkbok6" id="checkbox6">
                                <label for="checkbox6">
                                    <a href="#">XXL</a>
                                </label>
                            </li>
                        </ul>
                    </div><!-- /.widget-size -->
                    <div class="widget widget-price">
                        <h5 class="widget-title">Filter by price</h5>
                        <div class="price-filter">
                            <div id="slide-range"></div>
                            <p class="amount">
                                Price: <input type="text" id="amount" disabled="">
                            </p>
                        </div>
                    </div>
                    <div class="widget widget_tag">
                        <h5 class="widget-title">
                            Tags
                        </h5>
                        <div class="tag-list">
                            <a href="#">All products</a>
                            <a href="#" class="active">Bags</a>
                            <a href="#">Chair</a>
                            <a href="#">Decoration</a>
                            <a href="#">Fashion</a>
                            <a href="#">Tie</a>
                            <a href="#">Furniture</a>
                            <a href="#">Accesories</a>
                        </div>
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
                    @foreach($products->chunk(3) as $chunk)
                    <ul class="product style2 sd1">
                        @foreach($chunk as $product)
                        <li class="product-item">
                            <div class="product-thumb clearfix">
                                <a href="/product-types/accessories">
                                    <img src="{{ $product->image_url }}" alt="image">
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
                            <span class="regular">{{ $product->category }}</span><br>
                            <span class="regular">{{ $product->sku }}</span>
                            <div class="add-to-cart text-center">
                                <a href="#">ADD TO CART</a>
                            </div>
                            <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                        </li>
                        @endforeach
                    </ul><!-- /.product -->
                    @endforeach
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