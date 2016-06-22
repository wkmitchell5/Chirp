<?php

namespace App\Http\Controllers;

use App\Player;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class PlayersController extends Controller
{
   public function index()
   {
   	$players = Player::all();
   	return view('players.index', compact('players'));
   }

   public function show(Player $id)
   {
   	return $id;
   	// $player = Player::find($id);
   	// return view ('players.show', compact('player'));
   }

}
