@extends('frontends.layouts.app')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
            <div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/index">Home</a></li>
				  <li class="active">Order Review</li>
				</ol>
			</div><!--/breadcrums-->
		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Billing Details</h2>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing Name" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing Address" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing City" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing State" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing Country" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing Pincode" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Billing Mobile" />
                        </div>
							
							
					</div>
				</div>
				<div class="col-sm-1">
					<h2></h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<h2>Shipping Details</h2>
						
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping Name" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping Address" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping City" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping State" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping Country" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping Pincode" />
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Shipping Mobile" />
                        </div>
					</div><!--/sign up form-->
					
					
				</div>
			</div>
		</div>
	</section>
    <section id="cart_items">
		<div class="container">
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        @foreach ($carts as $cart)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{asset('image/'.$cart->image)}}" width="100px" height="100px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $cart->product_name }}</a></h4>
								<p>Code: {{ $cart->product_code }}</p>
							</td>
							<td class="cart_price">
								<p>INR {{ $cart->price }}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">INR {{ $cart->price*$cart->quantity}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        @endforeach
						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>INR 59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>INR 500</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>INR {{ $cart->price*$cart->quantity}}</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            <form name="paymentForm" id="paymentForm" action="/placeorder" method="post">
                @csrf
			<div class="payment-options">
					<span>
						<label><strong>Select Payment Method:</strong></label>
					</span>
					<span>
						<label><input type="radio" name="payment_method" id="COD" value="COD"><strong>COD</strong></label>
					</span>
					<span>
						<label><input type="radio" name="payment_method" id="Paypal" value="Paypal"><strong>Paypal</strong></label>
					</span>
                    <span style="float:right;">
            <button type="submit" class="btn btn-default" onclick="return selectPaymentMethod();">Place Order</button>
                    </span>
				</div>
			</form>
		</div>
	</section> <!--/

	@endsection