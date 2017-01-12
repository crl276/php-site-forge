<?php

namespace App\Http\Controllers;

use App\Card;
use App\Vote;
use Illuminate\Http\Request;

class VotesController extends Controller

{
    //

	public function store(Request $request, Card $card)

	{

		$vote = App\Vote::updateOrCreate(
			['vote_count' += 1];
		);
		
		return back;

	}

	public function downvote()

	{


	}

}
