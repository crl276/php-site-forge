@extends('layout')

@section('content')


	<h1>Edit the note</h1>

    <form method="POST" action="/notes/{{ $note->id }}/">
        {{ method_field('PATCH') }}
        <div class="form-group">
            <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update the note above</button>
        </div>
        {{ csrf_field() }}
    </form>

    <button class="btn btn-primary"><a href="/cards/{{ $note->card_id }}">Back to Card</a></button>

    <style>
        a {color: white;}
    </style>




@stop