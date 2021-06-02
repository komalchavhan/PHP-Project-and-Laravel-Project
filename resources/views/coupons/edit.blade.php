@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Coupon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('coupons.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Coupon Code:</strong>
                    <input type="text" name="coupon_code" value="{{ $coupon->coupon_code }}" 
                    class="form-control" placeholder="Coupon Code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Coupon Amount:</strong>
                    <input type="number" name="coupon_amount" class="form-control" 
                    placeholder="{{ $coupon->coupon_amount }}"
                        value="{{ $coupon->coupon_amount }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount Type:</strong>
                    <input type="text" name="amount_type" class="form-control" placeholder="{{ $coupon->amount_type }}"
                        value="{{ $coupon->amount_type }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Expiry Date:</strong>
                    <input type="text" name="expiry_date" class="form-control"
                     placeholder="{{ $coupon->expiry_date }}"
                        value="{{ $coupon->expiry_date }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection