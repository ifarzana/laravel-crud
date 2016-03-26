<!-- app/views/restaurants/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Edit Restaurants</title>
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

<h1>Edit {{ $restaurant->name }}</h1>

<!-- if there are creation errors, they will show here-->


	{!! Form::model($restaurant, array('action' => array('RestaurantController@update', $restaurant->id), 'method' => 'PUT')) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name')!!}
		{!! Form::text('name', null, array('class' => 'form-control'))!!}
	</div>

	<div class="form-group">
		{!! Form::label('location', 'Location')!!}
		{!! Form::text('location', null, array('class' => 'form-control'))!!}
	</div>

	{!! Form::submit('Edit the Restaurant!', array('class' => 'btn btn-primary')) !!}

	{!! Form::close() !!}

</div>
</body>
</html>
