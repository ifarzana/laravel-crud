<!-- app/views/restaurants/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Create Restaurants</title>
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

<h1>Create a Restaurant</h1>

<!-- if there are creation errors, they will show here -->


{!! Form::open(array('url' => 'restaurants')) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', '', array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('location', 'Location') !!}
		{!! Form::text('location', '', array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Create the Restaurant!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

</div>
</body>
</html>