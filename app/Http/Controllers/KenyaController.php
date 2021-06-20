<?php

namespace App\Http\Controllers;

use App\Models\SunderlandPlayers;
use Illuminate\Http\Request;

class KenyaController extends Controller
{

    public function index(){
      
        return view('football.kenya.index');
    }

}
