@extends('frontends.layouts.app')
@section('content')
<section id="form"><!--form-->
		<div class="container">
		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				</div>
				<div class="col-sm-4">
                <div class="col-sm-4 col-sm-offset-1">
				</div>
					<div class="signup-form"><!--sign up form-->
						<h2>Forgot Password!</h2>
						<form id="forgotPasswordForm" name="forgotPasswordForm" 
						action="/forgotpassword" method="post" >
						@csrf							
							<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required=" "/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
</section><!--/form-->
@endsection