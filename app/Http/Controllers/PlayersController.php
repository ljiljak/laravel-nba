<?php

namespace NBA\Http\Controllers;

use Illuminate\Http\Request;
use NBA\Player;

class PlayersController extends Controller
{
    public function index() {
    	$players = Player::with('team')->get();

    	return view('players.index', compact('players'));
    	
    }

    public function show($id) {
    	$player = Player::find($id);

    	return view('players.show', compact('player'));
    }
}