@extends('frontends.layouts.app')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
            <div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/index">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
            <form action="/order_review" method="post">
                @csrf
		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Bill To</h2>
                        <div class="form-group">
							<input type="text" name="billing_name" class="form-control" id="billing_name" placeholder="Billing Name" />
							{!!$errors->first("billing_name", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="billing_address" class="form-control" id="billing_address" placeholder="Billing Address" />
							{!!$errors->first("billing_address", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="billing_city" class="form-control" id="billing_city" placeholder="Billing City" />
							{!!$errors->first("billing_city", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="billing_state" class="form-control" id="billing_state" placeholder="Billing State" />
							{!!$errors->first("billing_state", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="country" class="form-control" id="country" placeholder="Billing Country" />
							{!!$errors->first("country", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="pincode" class="form-control" id="pincode" placeholder="Billing Pincode" />
							{!!$errors->first("pincode", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Billing Mobile" />
							{!!$errors->first("mobile", "<span class='text-danger'>:message</span>")!!}
                        </div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="coppyAddress"> 
								<label class ="form-check-label" for="coppyAddress">Address Same As Billing Address</label>
                            </div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2></h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Ship To</h2>
                        <div class="form-group">
							<input type="text" name="billing_name" class="form-control" id="billing_name" placeholder="Shipping Name" />
							{!!$errors->first("billing_name", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="billing_address" class="form-control" id="billing_address" placeholder="Shipping Address" />
							{!!$errors->first("billing_address", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="billing_city" class="form-control" id="billing_city" placeholder="Shipping City" />
							{!!$errors->first("billing_city", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="billing_state" class="form-control" id="billing_state" placeholder="Shipping State" />
							{!!$errors->first("billing_state", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="country" class="form-control" id="country" placeholder="Shipping Country" />
							{!!$errors->first("country", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="pincode" class="form-control" id="pincode" placeholder="Shipping Pincode" />
							{!!$errors->first("pincode", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="form-group">
							<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Shipping Mobile" />
							{!!$errors->first("mobile", "<span class='text-danger'>:message</span>")!!}
                        </div>
						<button type="submit" class="btn btn-default">Check out</button>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection