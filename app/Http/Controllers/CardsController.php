<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function index() {

    	return view('cards.index');

    }
}
