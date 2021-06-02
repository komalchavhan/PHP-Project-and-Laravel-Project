@extends('frontends.layouts.app')
@section('content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/index">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
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
								<a href=""><img src="{{asset('image/'.$cart->image)}}" alt="" width="100px" height="100px" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $cart->product_name }}</a></h4> </a></h4>
								<p>Code: {{ $cart->product_code }}</p>
							</td>
							<td class="cart_price">
								<p> {{ $cart->price }} </p>
							</td>
							<td class="cart_quantity">
				            <div class="cart_quantity_button">
				          <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart->id.'/+1')}}"> + </a>
					         <input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity}}" 
							 autocomplete="off" size="2">
							 @if ($cart->quantity>1)
				          <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart->id.'/-1')}}"> - </a>
						  @endif
				            </div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">INR {{ $cart->price*$cart->quantity}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{url('/cart/delete-product/'.$cart->id)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<form action="/cart/apply-coupon" method="post">
								@csrf
								<h5>Coupon Code :</h5>
								<input type="text" name="coupon_code" id="coupon_code" placeholder="Coupon Code" />
								<input type="submit" value="Apply" class="btn btn-default check_out">
								</form>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span></span></li>
						</ul>
							<a class="btn btn-default update" href="/myaccount">Update</a>
							<a class="btn btn-default check_out" href="/check">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection
	
