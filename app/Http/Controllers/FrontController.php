<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $teams = Team::with('players')->orderBy('name', 'asc')->get();
        return view('index', compact('teams'));
    }

    public function manage()
    {
        $players = Player::orderBy('name', 'asc')->get();
        $teams   = Team::orderBy('name', 'asc')->get();
        return view('manage', compact('teams', 'players'));
    }
}
