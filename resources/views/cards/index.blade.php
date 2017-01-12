@extends('layout')

@section('content')

	<h1>All Cards</h1>

	@foreach ($cards as $card)

		<div> 
				<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
		</div>	

	@endforeach

	<button type="submit" class="btn btn-primary" method="POST" action="/cards/{card}/upvote">
	{{ method_field('PUT') }}
	UpVote</button>
	@foreach($card->votes as $vote)
		<li>{{ $vote->vote_count }}</li>
	@endforeach

	


@stop