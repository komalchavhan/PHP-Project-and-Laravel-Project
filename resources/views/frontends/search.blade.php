@extends('frontends.layouts.app')
@section('content')

@foreach ($products as $product)
{{$product->product_name}}
<img src="{{asset('image/'.$product->image)}}" width="300px" height="300px" >
@endforeach
@foreach ($categories as $category)
{{$category->category_name}}
@endforeach
@endsection



