@extends('frontends.layouts.app')
@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/index">Home</a></li>
				  <li class="active">Wishlist</li>
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
						
						<tr>
							<td class="cart_product">
								<img src="{{asset('images/home/product1.jpg')}}" width="100" height="100"alt="" />
							</td>
							<td class="cart_description">
								<h4><a href=""></a></h4> </a></h4>
								<p>Code:2345</p>
							</td>
							<td class="cart_price">
								<p>INR 3400</p>
							</td>
							<td class="cart_quantity">
				            <div class="cart_quantity_button">
				          <a class="cart_quantity_up" href=""> + </a>
					         <input class="cart_quantity_input" type="text" name="quantity" value="2" autocomplete="off" size="2">
				          <a class="cart_quantity_down" href=""> - </a>
				            </div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">INR 3400</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
@endsection