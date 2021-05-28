<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
   public function festival(){
    return view('football.festival.show');
   }

   public function volunteer(){
    return view('volunteer.show');
   }
}
