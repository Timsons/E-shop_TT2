@extends('layouts.main')
<link href="{{ asset('css/catalog.css') }}" rel="stylesheet">


@section('content')

    
                
	<div class="contained">			
		@if(count($products)==0)
			<p>NOTHING HERE</p>
		@else
			@foreach($products as $product)
				<div class="catalog">
					<a href="">
						<img src="" alt="{{$product->name}}" width="180" height="180">
						<div class="name">
							<p>{{$product->name}}</p>
						</div>
					</a>
				</div>
			@endforeach
		@endif	
		<div class="catalog">
				  <a target="_blank" href="img_5terre.jpg">
					<img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
				  </a>
				  <div class="desc">Add a description of the image here</div>
		</div>
		<div class="catalog">
				<a target="_blank" href="img_5terre.jpg">
				<img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
			  <div class="desc">Add a description of the image here</div>
		</div>
		<div class="catalog">
			  <a target="_blank" href="img_5terre.jpg">
				<img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
			  </a>
				<div class="desc">Add a description of the image here</div>
		</div>
	</div>
    

@endsection
