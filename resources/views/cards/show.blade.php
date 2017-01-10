@extends('layout')

@section('content')

	<h1> {{ $card->title }}</h1>

	<ul>
		@foreach($notes as $note)

		<li>{{ $note->body }}<br>
			{{ $note->created_at }}
		</li>
	</ul>

@stop