@extends('frontend.home')
@section('content')

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Checkout</h3>
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li class="active">Checkout</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!-- Billing Details -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Billing address</h3>
					</div>
					<form action="{{url('/shipping-info')}}" method="post">
						@csrf
						<div class="form-group">
							<input class="input" name="name" type="text" placeholder="FUll Name">
						</div>
						<div class="form-group">
							<input class="input" type="email" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="address" placeholder="Address">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="city" placeholder="City">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="country" placeholder="Country">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="zip_code" placeholder="ZIP Code">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="mobile" placeholder="Telephone">
						</div>
						<input type="submit" class="primary-btn order-submit" value="Next" style="float: right;">
					</form>
				</div>
				<!-- /Billing Details -->

			</div>


		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

@endsection