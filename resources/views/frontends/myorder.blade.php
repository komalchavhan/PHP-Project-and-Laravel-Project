@extends('frontends.layouts.app')
@section('content')




<section id="cart_items">
  <div class="container">
    <div class="container">
      <div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="/index">Home</a></li>
    <li class="active">My Order</li>
  </ol>
</div><!--/breadcrums-->
<div class="row">
    <div class="review-payment">
      <h2>All Orders</h2>
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
                      
          @foreach ($carts as $cart)
          <tr>
            <td class="cart_product">
              <a href=""><img src="{{asset('image/'.$cart->image)}}" width="100px" height="100px" alt=""></a>
            </td>
            <td class="cart_description">
              <h4><a href="">{{ $cart->product_name }}</a></h4>
              <p>Code: {{ $cart->product_code }}</p>
            </td>
            <td class="cart_price">
              <p>INR {{ $cart->price }}</p>
            </td>
            <td class="cart_quantity">
              <div class="cart_quantity_button">
                <a class="cart_quantity_up" href=""> + </a>
                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity}}" autocomplete="off" size="2">
                <a class="cart_quantity_down" href=""> - </a>
              </div>
            </td>
            <td class="cart_total">
              <p class="cart_total_price">INR {{ $cart->price*$cart->quantity}}</p>
            </td>
            <td class="cart_delete">
              <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
          </tr>
                      @endforeach
        </tbody>
      </table>
    </div>
         
  </div>
</section> <!--/
@endsection