@extends('layout')

@section('content')

	<p1>
	
	{{ $player->FirstName }}

	</p1>

	<ol>

		@foreach ($player->notes as $note)

			<li>{{$note->body}}</li>

		@endforeach

	</ol>

@stop

