@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

			<h1>{{ $player->FirstName . $player->LastName }}</h1>

			<ul class="list-group">

				@foreach ($player->notes as $note)

					<li class="list-group-item clearfix">{{$note->body}} <a href="/notes/{{ $note->id }}/edit" class="btn btn-default" style="float: right";>Edit</a> </li>

				@endforeach

			</ul>

			<hr>

			<h3>Add a New Note</h3>

			<form method="POST" action="/players/{{ $player->id }}/notes">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="form-group">

					<textarea name="body" class="form-control"></textarea>

				</div>
				
				<div class="form-group">

					<button type="submit" class="btn btn-primary">Add Note</button>

				</div>


			</form>
		</div>	
	</div>

@stop

