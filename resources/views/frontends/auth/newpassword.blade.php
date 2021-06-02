@extends('frontends.layouts.app')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Change Password!</h2>
						<form action="/index" >
						@csrf
							<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required=" "/>
							
							<input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password" required=" "/>
														
                            <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password" required=" "/>

                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="confirm_password" required=" "/>

                            
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->					
				</div>
			</div>
		</div>
	</section><!--/form-->