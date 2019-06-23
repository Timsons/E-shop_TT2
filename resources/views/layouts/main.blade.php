<!DOCTYPE html>
<html>
	<head>
		<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
	</head>
	<body>
		<!-- Side navigation -->
		<div class="sidenav">
			@if(count($categories)==0)
				<p>Nothing here</p>
			@else
				@foreach($categories as $category)
					<a href=""> {{$category->name}}</a>
				@endforeach
			@endif
		</div>

<!-- Page content -->
	</body>


</html>