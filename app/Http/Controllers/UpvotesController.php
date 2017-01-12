<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class UpvotesController extends Controller
{
    //
	$upvotes = [0,1,2];

	public function upvote()
	{
		
		return view('cards.show');
	}

}
