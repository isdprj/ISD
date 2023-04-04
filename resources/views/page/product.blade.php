@extends('base')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{$product->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('index')}}">Trang chủ</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        @if ($product->promotion_price > 0)
                        <div class="ribbon-wrapper">
                            <div class="ribbon sale">Sale</div>
                        </div>
                        @endif
                        <img src="source/image/product/{{$product->image}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">{{$product->name}}</p>
                            @if ($product->promotion_price == 0)
                                <span class="flash-sale"><i>{{number_format($product->unit_price)}}</i> đ</span>
                            @else 
                                <span class="flash-del"><i>{{number_format($product->unit_price)}}</i> đ</span>
                                <span class="flash-sale"><i>{{number_format($product->promotion_price)}}</i> đ</span>
                            @endif
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{$product->description}}</p>
                        </div>

                        <div class="space20">&nbsp;</div>

                        <p>Chọn mẫu:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="size">
                                <option>Kích cỡ</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Màu</option>
                                <option value="Red">Đỏ</option>
                                <option value="Green">Xanh lá</option>
                                <option value="Yellow">Vàng</option>
                                <option value="Black">Đen</option>
                                <option value="White">Trắng</option>
                            </select>
                            <select class="wc-select" name="color">
                                <option>Số lượng</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart" href="{{route('cart',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả</a></li>
                        <li><a href="#tab-reviews">Đánh giá (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{$product->stats}}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>Chưa có đánh giá nào</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản phẩm liên quan</h4>

                    <div class="row">
                        <div class="col-sm-4">
                        @foreach ($relatedProduct as $rp)
                        @if ($rp->promotion_price > 0)
                        <div class="ribbon-wrapper">
                            <div class="ribbon sale">Sale</div>
                        </div>
                        @endif                            
                        <div class="single-item">
                            <div class="single-item-header">
                                <a href="{{route('product',$rp->id)}}"><img src="source/image/product/{{$rp->image}}" alt=""></a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">{{$rp->name}}</p>
                                @if ($product->promotion_price == 0)
                                <span class="flash-sale"><i>{{number_format($rp->unit_price)}}</i> đ</span>
                            @else 
                                <span class="flash-del"><i>{{number_format($rp->unit_price)}}</i> đ</span>
                                <span class="flash-sale"><i>{{number_format($rp->promotion_price)}}</i> đ</span>
                            @endif
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="{{route('cart',$rp->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="{{route('product',$rp->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                        
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Bán chạy</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                {{-- <div class="widget">
                    <h3 class="widget-title">New Products</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
                                <div class="media-body">
                                    Sample Product
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget --> --}}
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection