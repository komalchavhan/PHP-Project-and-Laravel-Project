@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Management</h2>
            </div>
            <div align="center">
                <a href="{{ url('/export-usermanagements')}}" class="btn btn-primary btn-mini">Export</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usermanagements.create') }}" 
                title="Create a user"> <i class="fas fa-plus-circle"></i>
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Status</th>
            <th>Role</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($usermanagements as $userm)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $userm->firstname }}</td>
                <td>{{ $userm->lastname }}</td>
                <td>{{ $userm->email }}</td>
                <td>{{ $userm->password }}</td>
                <td>{{ $userm->confirmpassword }}</td>
                <td>{{ $userm->status }}</td>
                <td>{{ $userm->role }}</td>
                <td>
                <form action="{{ route('usermanagements.destroy',$userm->id) }}" method="POST">
     
    

     <a class="btn btn-primary" href="{{ route('usermanagements.edit',$userm->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $usermanagements->links('pagination::bootstrap-4') !!}

@endsection