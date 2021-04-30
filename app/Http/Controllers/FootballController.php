<?php

namespace App\Http\Controllers;

use App\Models\SunderlandPlayers;
use Illuminate\Http\Request;

class FootballController extends Controller
{

    public function index(){
      
        return view('football.sunderland.index');
    }

}
