@extends('layout')

@section('content')

<h1>All Players</h1>

@foreach ($players as $player)

<div>
    {{$player->FirstName}} {{$player->LastName}}
</div>

@endforeach

@stop