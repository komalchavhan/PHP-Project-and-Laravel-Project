@extends('frontends.layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                @foreach($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="">{{$category->name}}</a></h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            <div class="col-sm-9" padding="-right">
                <div class="features_items">
                    <h2 class="title text-center">About us</h2>
                    <p align="center">about us</p> 
                </div>
            </div> 
        </div>  
    </div> 
</section>  
@endsection