<!DOCTYPE html>
<html>
	<head>
		<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
		<link href="{{ asset('css/topbar.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="topnav">
			<a class="active" href="#home">Home</a>
			  <a href="#news">News</a>
			  <a href="#contact">Contact</a>
			  <a href="#about">About</a>
		</div>
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