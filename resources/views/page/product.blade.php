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
                        <div class="variation-img-list">
                            @foreach ($productVariation as $pv)
                                <img src="source/image/product/{{$pv->image}}" alt="" class="variation-img">
                            @endforeach
                        </div>
                        <div class="single-item-desc">
                            <p>{{$product->description}}</p>
                        </div>

                        <div class="space20">&nbsp;</div>

                        <div class="single-item-options">
                            <p class="select-title">Chọn mẫu:&nbsp;</p>
                            <select class="wc-select" name="variation">
                                @foreach ($productVariation as $pv)
                                <option value="{{$pv->varname}}">{{$pv->varname}}</option>
                                @endforeach
                            </select>
                            <p class="select-title">Kích cỡ:&nbsp;</p>
                            @if ($product->id_category < 6)
                                <select class="wc-select" name = "size">
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                </select>
                            @elseif ($product->id_category == 8) 
                                <select class="wc-select" name="size">
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            @endif
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
                        @endforeach   
                        </div>
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Bán chạy</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/product/shoes_adidas1.1.png" alt=""></a>
                                <div class="media-body">
                                    Sản phẩm mẫu
                                    <span class="beta-sales-price">1.390.000đ</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/product/clothes2.2.png" alt=""></a>
                                <div class="media-body">
                                    Sản phẩm mẫu
                                    <span class="beta-sales-price">199.000đ</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/product/shoes_kamito2.3.png" alt=""></a>
                                <div class="media-body">
                                    Sản phẩm mẫu
                                    <span class="beta-sales-price">599.000đ</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="source/image/product/balo3.1.png" alt=""></a>
                                <div class="media-body">
                                    Sản phẩm mẫu
                                    <span class="beta-sales-price">139.000đ </span>
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