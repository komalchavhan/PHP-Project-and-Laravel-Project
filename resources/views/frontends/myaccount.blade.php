@extends('frontends.layouts.app')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Update account</h2>
						<form action="/myaccount" id="accountForm" name="accountForm" method="POST">
						@csrf
							<input type="text"  name="firstname" value="usersDetails" class="form-control" id="firstname" placeholder="First Name" />
							{!!$errors->first("firstname", "<span class='text-danger'>:message</span>")!!}

							<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" />
							{!!$errors->first("lastname", "<span class='text-danger'>:message</span>")!!}

							<input type="address" name="address" class="form-control" id="address" placeholder=" Address" />
							{!!$errors->first("address", "<span class='text-danger'>:message</span>")!!}

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
                            <br><br>
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
							</select><br><br>
							<input type="zip" name="zip" class="form-control" id="zip" placeholder="Zip" />
							{!!$errors->first("zip", "<span class='text-danger'>:message</span>")!!}

							<input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone" />
							{!!$errors->first("phone", "<span class='text-danger'>:message</span>")!!}
							
							<button type="submit" class="btn btn-default">Update</button>
						
						</form>
						
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Update Password</h2>
						<form action="" >
						@csrf
							<input type="password" name="password" class="form-control" id="password" placeholder="Create Password"/>
							{!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}
							
							<input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password"/>
							{!!$errors->first("new_password", "<span class='text-danger'>:message</span>")!!}
							
							<input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password "/>
							{!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}
							
							
							<button type="submit" class="btn btn-default">Update</button>
						
						</form>
					</div><!--/sign up form-->
						
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection