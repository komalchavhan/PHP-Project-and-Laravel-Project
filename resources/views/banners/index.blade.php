@extends('admin.layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Banner</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('banners.create') }}"> Create New Banner</a>
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
            <th>Title</th>
            <th>Image</th>
            <th>Link</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($banners as $banner)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $banner->image }}" width="100px"></td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->link }}</td>
            <td>
                <form action="{{ route('banners.destroy',$banner->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('banners.show',$banner->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('banners.edit',$banner->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $banners->links('pagination::bootstrap-4') !!}
        
@endsection
