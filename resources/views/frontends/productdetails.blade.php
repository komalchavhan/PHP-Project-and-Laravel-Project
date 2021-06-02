@extends('frontends.layouts.app')
@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Nike </a></li>
											<li><a href="">Under Armour </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
											<li><a href="">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
							</div>			
						</div><!--/category-products-->
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('image/'.$productdetails->image)}}" width="250px" height="250px"  />								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								 
								 
							</div>
						</div>
						<div class="col-sm-7">
							<form name="addtocart" id ="addtocart" action="/cartaction" method="post">
							@csrf
							<input type="hidden" name="product_id" value="{{$productdetails->id}}">
							<input type="hidden" name="product_name" value="{{$productdetails->product_name}}">
							<input type="hidden" name="product_code" value="{{$productdetails->product_code}}">
							<input type="hidden" name="product_color" value="{{$productdetails->product_color}}">
							<input type="hidden" name="price" value="{{$productdetails->price}}">
							
							<div class="product-information"><!--/product-information-->
								<img src="{{asset('images/product-details/new.jpg')}}" class="newarrival" alt="" />
								<h2>{{$productdetails->product_name}}</h2>
								<p>Code: {{$productdetails->product_code}}</p>
								<img src="{{asset('images/product-details/rating.png')}}" alt="" />
								<span>
									<span>INR:{{$productdetails->price}}</span>
									<label>Quantity:</label>
									<input type="text" name="quantity" value="1" />
									<li>
									<button type="submit" class="btn btn-fefault cart" name="cartButton" id="cartButton" value="cartButton">
									<i class="fa fa-shopping-cart"> Add to cart</i></button>
									</li>
								<p><b>Availability:In Stock</b><span id="Availability"> 
								</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								
								<a href=""><img src="{{asset('images/product-details/share.png')}}" class="share img-responsive" alt="" /></a>
							</div><!--/product-information-->
							</form>
						</div>
					</div><!--/product-details-->

					
					
					
					
				</div>
			</div>
		</div>
	</section>
	@endsection
	