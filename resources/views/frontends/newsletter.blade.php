@extends('frontends.layouts.app')
@section('content')
@foreach($newsletters as $newsletter)
<h2>{{$newsletter->email}}
@endforeach
@endsection
