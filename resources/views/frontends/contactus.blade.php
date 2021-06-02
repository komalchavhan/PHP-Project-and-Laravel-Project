@extends('frontends.layouts.app')
@section('content')
        <div class="container">
	     	<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Contact Us</h2>
						
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" action="/contactus" class="contact-form row" name="contact-form" method="POST">
							@csrf
				            <div class="form-group col-md-6">
				                <input type="text" name="name" id="name" placeholder="Name"class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" id="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>	
	    	</div>  
		</div>
@endsection
	