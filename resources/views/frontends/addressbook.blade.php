@extends('frontends.layouts.app')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="step-one">
				<h2 class="heading">Address Book</h2>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Address Book</p>
							<div class="form-one">
								<form action="{{route('store')}}" method="POST">
								@csrf
									
									<input type="text" class="form-control" name="shipping_address" id="shipping_address" placeholder="Shipping Address *">
	                               {!!$errors->first("shipping_address", "<span class='text-danger'>:message</span>")!!}

								   <input type="text" class="form-control" name="billing_address" id="billing_address" placeholder="Billing Address *">
	                               {!!$errors->first("billing_address", "<span class='text-danger'>:message</span>")!!}

								   <input type="text" class="form-control" name="address" id="address" placeholder="Address *">
	                               {!!$errors->first("address", "<span class='text-danger'>:message</span>")!!}

									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
										
				</div>
			</div>
</section> <!--/#cart_items-->