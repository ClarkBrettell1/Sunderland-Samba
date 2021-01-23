<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function show($id)
    {
        $player = \DB::table('players')->where('id', $id)->first();
        return view('player', ['player' => $player ]);
    }
}
