@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Configuration</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('configurations.create') }}" title="Create a configuration"> <i class="fas fa-plus-circle"></i>
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
            <th>Admin Email</th>
            <th>Notification Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($configurations as $configuration)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $configuration->admin_email }}</td>
                <td>{{ $configuration->notification_email }}</td>
                <td>
                <form action="{{ route('configurations.destroy',$configuration->id) }}" method="POST">
     
    

     <a class="btn btn-primary" href="{{ route('configurations.edit',$configuration->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $configurations->links('pagination::bootstrap-4') !!}
@endsection