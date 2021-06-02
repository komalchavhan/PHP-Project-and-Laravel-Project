@extends('frontends.layouts.app')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Create New Password!</h2>
						<form action="{{asset('/index')}}" >
						@csrf
							<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required=" "/>
							
							<input type="password" name="password" class="form-control" id="password" placeholder="Password" required=" "/>
														
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->					
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection