<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right"> 
                @php
                    $customer_id = Session::get('id')
                @endphp

                @if($customer_id != NULL)
                    <li><a href="{{url('/customer-logout')}}"><i class="fa fa-user-o"></i> Logout</a></li>
                @else
                    <li><a href="{{url('/user-login')}}"><i class="fa fa-user-o"></i> Login</a></li>
                @endif
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{asset('frontend/img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action="{{url('/search')}}" method="GET">
                            <select class="input-select" name="category">
                                <option value="all" {{request('category') == "all" ? 'selected' : ''}} >All Categories</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{request('category') == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input class="input" placeholder="Search here" name="product" value="{{request('products')}}">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        @php 
                            $cart_array = cartArray();
                        @endphp                        
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty"><?= count($cart_array) ?></div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    @foreach($cart_array as $add_cart)
                                        @php                                            
                                            $images = $add_cart['attributes'][0];
                                            $images = explode('|', $images);
                                            $images = $images[0];
                                        @endphp
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{asset('/productImage/'.$images)}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">{{$add_cart['name']}}</a></h3>
                                                <h4 class="product-price"><span class="qty">{{$add_cart['quantity']}}</span>&#2547;{{$add_cart['price']}}</h4>
                                            </div>
                                            <a href="{{url('/delete-cart/'.$add_cart['id'])}}" class="delete"><i class="fa fa-close"></i></a>
                                        </div>
                                    @endforeach
                                    
                                </div>
                                <div class="cart-summary">
                                    <small><?= count($cart_array) ?> Item(s) selected</small>
                                    <h5>SUBTOTAL: &#2547; {{Cart::getTotal()}}</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="">View Cart</a>
                                    @php
                                        $customer_id = Session::get('id')
                                    @endphp
                                    @if($customer_id != NULL)
                                    <a href="{{url('/checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                    @else
                                    <a href="{{url('/user-login')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>