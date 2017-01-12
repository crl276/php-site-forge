@extends('layout')

@section('content')

	<h1> {{ $card->title }}</h1>

	<ul>

		@foreach($card->notes as $note)

			<li>{{ $note->body }}<br>
				{{ $note->created_at }}
			</li>

		@endforeach
	</ul>


@stop