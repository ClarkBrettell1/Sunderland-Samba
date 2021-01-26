<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(){
        $players = \DB::table('players')->get();
        return view('players', ['players' => $players]);
    }
    public function show($id)
    {
        $player = \DB::table('players')->where('id', $id)->first();
        return view('player', ['player' => $player ]);
    }
}
