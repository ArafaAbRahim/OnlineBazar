@extends('frontend.home')
@section('content')

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Payment</h3>
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li class="active">Payment</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			
            <div class="col-md-3"></div>
            <!-- Order Details -->
            <div class="col-md-6 order-details" >
                <div class="section-title text-center">
                    <h3 class="title">Your Order</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCT</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    @foreach($cart_array as $cart)
                    <div class="order-products">
                        <div class="order-col">
                            <div>{{$cart['quantity']}} x {{$cart['name']}}</div>
                            <div>&#2547;{{Cart::get($cart['id'])->getPriceSum()}}</div>
                        </div>                      
                    </div>
                    @endforeach

                    <div class="order-col">
                        <div>Shiping</div>
                        <div><strong>&#2547;70</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">&#2547; {{Cart::getTotal()+70}}</strong></div>
                    </div>
                </div>

                <form action="{{url('/order-place')}}" method="post">
                    @csrf
                    <div class="section-title text-center" style="margin-top: 40px;">
                        <h4 class="title" style="color: #D10024;">Please Select a Payment Method</h4>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1" value="cash">
                            <label for="payment-1">
                                <span></span>
                                Cash on Delivery
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2" value="bkash">
                            <label for="payment-2">
                                <span></span>
                                BKash
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3" value="nogod">
                            <label for="payment-3">
                                <span></span>
                                Nogod
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-4" value="rocket">
                            <label for="payment-4">
                                <span></span>
                                Rocket
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms & conditions</a>
                        </label>
                    </div>
                    <center><input type="submit" class="primary-btn order-submit" value="Place Order"></center>
                </form>
            </div>
            <!-- /Order Details -->
        </div>
    </div>
</div>

@endsection