<?php

namespace NBA\Http\Controllers;

use Illuminate\Http\Request;
use NBA\Team;

class TeamsController extends Controller
{
    public function index() {
    	$teams = Team::with('players')->get();

    	return view('teams.index', compact('teams'));
    	
    }

    public function show($id) {
    	$team = Team::find($id);

    	return view('teams.show', compact('team'));
    }
}