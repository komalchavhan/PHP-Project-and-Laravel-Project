@extends('admin.layouts.app')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Color</th>
            <th>Size</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>User Email</th>
            <th>Session Id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_code }}</td>
            <td>{{ $product->product_color}}</td>
            <td>{{ $product->size}}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->quantity}}</td>
            <td>{{ $product->user_email}}</td>
            <td>{{ $product->session_id}}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links('pagination::bootstrap-4') !!}
        
@endsection