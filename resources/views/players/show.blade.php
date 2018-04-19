@extends('layouts.master')

@section ('content')
	<p>{{ $player->first_name }} </p>
	<p>{{ $player->last_name }} </p>
	<p>{{ $player->email }} </p>

	<p>
		<a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a>   
	</p> 

@endsection
