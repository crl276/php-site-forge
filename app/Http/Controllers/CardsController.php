<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //

    public function index() {

    	$cards = Card::all();

    	return view('cards.index', compact('cards', 'people'));

    }

    public function show(Card $card)
    
    {
   	
   		return view('cards.show', compact('card'));
    
    }

    public function upvotes(Card $card)

    {

    	

    }

}
