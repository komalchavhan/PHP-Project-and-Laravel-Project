@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $configuration->admin_email }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('configurations.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Admin Email:</strong>
                {{ $configuration->admin_email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Notification Email:</strong>
                {{ $configuration->notification_email }}
            </div>
        </div>
    </div>
@endsection