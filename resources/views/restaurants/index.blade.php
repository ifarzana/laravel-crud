<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

<h1>All the Restaurants</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Location</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($restaurants as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->location }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the restaurant (uses the destroy method DESTROY /restaurants/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->

				{!! Form::open(array('url' => 'restaurants/' . $value->id, 'class' => 'pull-right')) !!}
					{!! Form::hidden('_method', 'DELETE') !!}
					{!! Form::submit('Delete this Restaurant', array('class' => 'btn btn-warning'))  !!}
				{!! Form::close()  !!}

				<!-- show the restaurant (uses the show method found at GET /restaurants/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('restaurants/' . $value->id) }}">Show this Restaurant</a>

				<!-- edit this restaurant (uses the edit method found at GET /restaurants/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('restaurants/' . $value->id . '/edit') }}">Edit this Restaurant</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>