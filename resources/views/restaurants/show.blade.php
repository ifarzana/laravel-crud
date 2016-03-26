<!DOCTYPE html>
<html>
<head>
	<title>Showing {{ $restaurant->name }}</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('restaurants') }}">View All Restaurants</a></li>
			<li><a href="{{ URL::to('restaurants/create') }}">Create a Restaurant</a>
		</ul>
	</nav>
<h1>Showing {{ $restaurant->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $restaurant->name }}</h2>
		<p>
			<strong>Location:</strong> {{ $restaurant->location }}<br>
		</p>
	</div>

</div>
</body>
</html>

