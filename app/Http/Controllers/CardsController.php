<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //

    public function index() {

    	$people = ['Moe', 'Larry', 'Curly'];

    	$cards = Card::all();

    	return View::make('cards.index')->with[(
    		'people' => $people,
    		'cards' => $cards,
    	)];

    }

    public function show(Card $card)
    {

    return view('cards.show', compact('card'));
    }
}
