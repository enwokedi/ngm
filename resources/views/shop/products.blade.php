@extends('frontend.main_shop')

@section('title', 'Page Title')

@section('content')
<div class="col-md-9">
    <div class="filter-shop clearfix">
        <p class="showing-product float-right">
            Prices Include VAT
        </p>
    </div><!-- /.filter-shop -->
    <div class="product-content product-threecolumn product-slidebar clearfix">
        <!-- foreach with array chunk 3 (columns) -->
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
    </div><!-- /.product-content -->
    <div class="row">
        <div class="pagination pagination-lg justify-content-end">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div><!-- /.col-md-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.flat-row -->
<!-- End Page Content -->

@stop