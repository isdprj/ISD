@extends('base')
@section('content')
@if (Session::has('flag'))
<div class="alert alert-{{Session::get('flag') }}">
    {{Session::get('message')}}
</div> 
@endif
@if (Session::has('logoutMessage'))
<div class="alert alert-success">
    {{Session::get('logoutMessage')}}
</div>
@endif
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
        <div class="banner" >
                <ul>
                    @foreach ($slider as $sld)
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sld->image}}" data-src="source/image/slide/{{$sld->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sld->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>
                </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4><b>New Products</b></h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{count($newProduct)}} new products</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($newProduct as $new)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($new->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('product',$new->id)}}"><img src="./source/image/product/{{$new->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$new->name}}</p>
                                        <p class="single-item-price">
                                            @if ($new->promotion_price == 0)
                                            <span class="flash-sale">{{$new->unit_price}} đ</span>
                                            @else 
                                            <span class="flash-del">{{$new->unit_price}} đ</span>
                                            <span class="flash-sale">{{$new->promotion_price}} đ</span>
                                            @endif
                                            
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4><b>Sale Products</b></h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{count($saleProduct)}} on sale</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($saleProduct as $sp)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    <div class="single-item-header">
                                        <a href="{{route('product',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sp->name}}</p>
                                        <p class="single-item-price">
                                            <span class="flash-del">{{$sp->unit_price}} đ</span>
                                            <span class="flash-sale">{{$sp->promotion_price}} đ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$saleProduct->links()}}</div>
                        <div class="space40">&nbsp;</div>
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->
            <div class="space60">&nbsp;</div>
            <div id="news" class="space-top-none">
                <div class="row">
                    <div class="col-sm-12 ">
                        <h4><b>What's new?</b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="news-section">
                            <div class="news-box">
                                <div class="news-img">
                                    <a href="#"><img src="source/assets/dest/images/products/1.jpg" alt=""></a>
                                </div>
                                <div class="news-title">
                                    <a href="#">Title 1</a>
                                </div>
                                <div class="news-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="news-section">
                            <div class="news-box">
                                <div class="news-img"> 
                                    <a href=""><img src="source/assets/dest/images/products/1.jpg" alt=""></a>   
                                </div>
                                <div class="news-title">
                                    <a href="#">Title 1</a>
                                </div>
                                <div class="news-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="news-section">
                            <div class="news-box">
                                <div class="news-img">
                                    <a href=""><img src="source/assets/dest/images/products/1.jpg" alt=""></a>

                                </div>
                                <div class="news-title">
                                    <a href="#">Title 1</a> 
                                </div>
                                <div class="news-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .main-content -->
    </div> <!-- #content -->
    @endsection