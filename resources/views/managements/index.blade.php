@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Order managements</h2>
            </div>
            <div align="center">
                <a href="{{ url('/export-managements')}}" class="btn btn-primary btn-mini">Export</a>
            </div><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Order Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Pincode</th>
            <th>Country</th>
            <th>Mobile</th>
            <th>Payment Method</th>
            <th>Grand Method</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($managements as $management)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $management->order_id }}</td>
                <td>{{ $management->firstname }}</td>
                <td>{{ $management->lastname }}</td>
                <td>{{ $management->address }}</td>
                <td>{{ $management->city }}</td>
                <td>{{ $management->pincode }}</td>
                <td>{{ $management->country }}</td>
                <td>{{ $management->mobile }}</td>
                <td>{{ $management->payment_method }}</td>
                <td>{{ $management->grand_total }}</td>
                <td>{{ $management->status }}</td>
                <td>    
                <a href="{{ url('')}}" class="btn btn-primary btn-mini">Proceed</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $managements->links('pagination::bootstrap-4') !!}
@endsection