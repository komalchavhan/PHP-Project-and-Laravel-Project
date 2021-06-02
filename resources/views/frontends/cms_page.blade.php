@extends('frontends.layouts.app')
@section('content')	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">{{$cmspages->title}}</h2>
						<p>{{$cmspages->description}}</p>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>	
@endsection