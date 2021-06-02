@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cms pages</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cmspages.create') }}" 
                title="Create a category"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Title</th>  
            <th>Description</th>
            <th>url</th>
            <th>Status</th>          
            <th width="280px">Action</th>
        </tr>
        @foreach ($cmspages as $cms)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $cms->title }}</td>
                <td>{{ $cms->description }}</td>
                <td>{{ $cms->url }}</td>
                <td>{{ $cms->status }}</td>
                <td>
                <form action="{{ route('cmspages.destroy',$cms->id) }}" method="POST">
     <a class="btn btn-primary" href="{{ route('cmspages.edit',$cms->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $cmspages->links('pagination::bootstrap-4') !!}
@endsection