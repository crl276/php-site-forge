<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //

    public function store(Request $request, Card $card)
    {
    	// Call the addNote method on Card.php with a new Note passed as a parameter, the contents of which is the entirety of the request
    	$card->addNote(new Note($request->all()));

    	return back;
    }

    public function edit(Note $note)
    {
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
    	$note->update($request->all());

    	return back();
    }
}
