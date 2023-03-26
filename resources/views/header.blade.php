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
                <a href="index.html" id="logo"><img src="source/assets/dest/images/AHK-logo.jpg" width="200px" alt=""></a>
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
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Cart (None) <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            {{-- @if (Session::has('cart'))
                               @foreach ($product_cart as $product) --}}
                                   
                               
                            
                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/1.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Product</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>
                                {{-- @endforeach 
                            @endif --}}
                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/2.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Product</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/3.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Product</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-caption">
                                <div class="cart-total text-right">Total: <span class="cart-total-value">$34.55</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="checkout.html" class="beta-btn primary text-center">Order now <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
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
                    <li><a href="#">Shoes</a>
                        <ul class="sub-menu">
                            <li><a href="product_type.html">Adidas</a></li>
                            <li><a href="product_type.html">Nike</a></li>
                            <li><a href="product_type.html">Mizuno</a></li>
                            <li><a href="product_type.html">Kamito</a></li>
                            <li><a href="product_type.html">Puma</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Ultilities</a>
                        <ul class="sub-menu">
                            <li><a href="product_type.html">Socks</a></li>
                            <li><a href="product_type.html">Brassard</a></li>
                            <li><a href="product_type.html">Clothes</a></li>
                            <li><a href="product_type.html">Bags</a></li>
                            <li><a href="product_type.html">Gloves</a></li>
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