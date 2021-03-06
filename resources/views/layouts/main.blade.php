<!DOCTYPE html>
<html>
	<head>
		<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
		<link href="{{ asset('css/topbar.css') }}" rel="stylesheet">
	</head>
	<body>
	@section('topbar')
		<div class="topnav">
			  <a href="#home">Home</a>
			  <a href="#news">News</a>
			  <a href="#contact">Contact</a>
			  <a href="#about">About</a>
				<a href="./product">For Admins</a>
			  <input class="loginbutton" type="button" value="Login/Register" onclick="loginScreen()">
		</div>
	@show
	@section('sidebar')
		<div class="sidenav">
			@if(count($categories)==0)
				<p>Nothing here</p>
			@else
				@foreach($categories as $category)
					<a href=""> {{$category->name}}</a>
				@endforeach
			@endif
		</div>
	@show
		<div>
			@yield('content')
		</div>
	</body>


</html>


<script>
	function loginScreen(){
		window.location.href="./login/";
	}

</script>
