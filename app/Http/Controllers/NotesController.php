<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

use App\Player;

class NotesController extends Controller
{
    public function store(Request $request, Player $player)
    {
    	
    	// $note = new Note;
    	// $note->body = $request->body;
    	// $player->notes()->save($note);

    	$player->notes()->create([

    		'body' => $request->body

    		]);
    	return back();
 
    }

    public function edit(Note $note)
    {
    return view('notes.edit', compact('note'));
    }
}




