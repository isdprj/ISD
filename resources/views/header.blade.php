<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> Address, City, Province</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> Phone Number</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if (Auth::check())
                        <li><a href="#"><i class="fa fa-user"></i>Hi {{Auth::user()-> full_name}}</a></li>
                        <li><a href="{{route('logout')}}">Log out</a></li>
                    @else
                        <li><a href="{{route('register')}}">Register</a></li>
                        <li><a href="{{route('login')}}">Log in</a></li>   
                    @endif

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{route('index')}}" id="logo"><img src="source/assets/dest/images/AHK-logo.jpg" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Search for..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select">
                            <i class="fa fa-shopping-cart"></i> Cart (
                            @if(Session::has('cart'))
                            {{Session('cart')->totalQty}}
                            @else None
                            @endif
                            )
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        @if (Session::has('cart'))
                        <div class="beta-dropdown cart-body">
                               @foreach ($product_cart as $product)                          
                            <div class="cart-item">
                                <a href="{{route('del-cart',$product['item']['id'])}}" class="cart-item-delete">
                                    <i class="fa fa-times"></i>
                                </a>
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">{{$product['item']['image']}}</span>
                                        {{-- <span class="cart-item-options">Size: XS; Colar: Navy</span> --}}
                                        <span class="cart-item-amount">{{$product['qty']}}*
                                            <span>
                                                @if($product['item']['promotion_price']==0)
                                                    {{number_format($product['item']['unit_price'])}}
                                                @else 
                                                    {{number_format($product['item']['promotion_price'])}} 
                                                @endif
                                                đ
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                                @endforeach 
                           


                            <div class="cart-caption">
                                <div class="cart-total text-right">Total: 
                                    <span class="cart-total-value">
                                        {{number_format(Session('cart')->totalPrc)}} đ
                                    </span>
                                </div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="checkout.html" class="beta-btn primary text-center">Order now <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #56a2dc;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('index')}}">Home</a></li>
                    {{-- <li><a href="{{route('product_categories')}}">Our Products</a></li> --}}
                    <li><a href="{{route('shoes')}}">Shoes</a>
                        <ul class="sub-menu">
                            @foreach ($shoeType as $sType)
                                <li><a href="{{route('product_categories',$sType->id)}}">{{$sType->name}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li><a href="{{route('ultility')}}">Ultilities</a>
                        <ul class="sub-menu">
                            @foreach ($ultiType as $uType)
                                <li><a href="{{route('product_categories',$uType->id)}}">{{$uType->name}}</a></li> 
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">About us</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->