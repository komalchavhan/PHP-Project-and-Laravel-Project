@extends('frontends.layouts.app')
@section('content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->
			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form action="{{route('store')}}" method="POST">
							@csrf
								<input type="text" class="form-control" name="display_name" id="display_name" placeholder="Display Name">
								{!!$errors->first("display_name", "<span class='text-danger'>:message</span>")!!}

								<input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name">
							    {!!$errors->first("user_name", "<span class='text-danger'>:message</span>")!!}
								
								<input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
								{!!$errors->first("pass", "<span class='text-danger'>:message</span>")!!}

								<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password">
								{!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}
							<button type="submit" class="btn btn-primary">Continue</button>
							</form>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="{{route('store')}}" method="POST">
								@csrf
									<input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
									{!!$errors->first("company_name", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="email" id="email" placeholder="Email*">
									{!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
									
									<input type="text" class="form-control" name="title" id="title" placeholder="Title">
									{!!$errors->first("title", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name *">
	                               {!!$errors->first("first_name", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle Name">
									{!!$errors->first("middle_name", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name *">
									{!!$errors->first("last_name", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="address1" id="address1" placeholder="Address 1 *">
									{!!$errors->first("address1", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="address2" id="address2" placeholder="Address 2">
									{!!$errors->first("address2", "<span class='text-danger'>:message</span>")!!}
								</form>
							</div>
							<div class="form-two">
								<form action="{{route('store')}}" method="POST">
								@csrf
									<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Zip / Postal Code *">
									{!!$errors->first("zip_code", "<span class='text-danger'>:message</span>")!!}

									<select>
										<option id='country' name='country'>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<select>
										<option id='state'>-- State / Province / Region --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password">
									{!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}

									<input type="text"  class="form-control" name="phone_no" id="phone_no" placeholder="Phone *">
									{!!$errors->first("phone_no", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Mobile Phone">
									{!!$errors->first("mobile_no", "<span class='text-danger'>:message</span>")!!}

									<input type="text" class="form-control" name="fax" id="fax" placeholder="Fax">
									{!!$errors->first("fax", "<span class='text-danger'>:message</span>")!!}
									<button type="submit" class="btn btn-primary">Continue</button>
								</form>
							</div>
						</div>
					</div>
									
				</div>
			</div>
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
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{asset('images/cart/one.png')}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->
	@endsection