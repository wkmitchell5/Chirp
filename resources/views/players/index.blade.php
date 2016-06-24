@extends('layout')

@section('content')

	<h1>All Players</h1>

	@foreach ($players as $player)

		<div>
		    <a href="/players/{{ $player->id }}">{{ $player->FirstName }}</a>
		</div>

	@endforeach

@stop