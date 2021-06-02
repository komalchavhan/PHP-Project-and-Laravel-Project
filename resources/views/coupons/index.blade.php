@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Coupons</h2>
            </div>
            <div align="center">
                <a href="{{ url('/export-coupons')}}" class="btn btn-primary btn-mini">Export</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('coupons.create') }}" title="Create a coupon"> <i class="fas fa-plus-circle"></i>
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
            <th>Coupon Code</th>
            <th>Coupon Amount</th>
            <th>Amount Type</th>
            <th>Expiry Date</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($coupons as $coupon)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $coupon->coupon_code }}</td>
                <td>{{ $coupon->coupon_amount }}</td>
                <td>{{ $coupon->amount_type }}</td>
                <td>{{ $coupon->expiry_date }}</td>
                <td>
                <form action="{{ route('coupons.destroy',$coupon->id) }}" method="POST">
     
    

     <a class="btn btn-primary" href="{{ route('coupons.edit',$coupon->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $coupons->links('pagination::bootstrap-4') !!}
@endsection