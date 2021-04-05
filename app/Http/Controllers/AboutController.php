<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(){
        $about = \DB::table('about')->get();
        return view('about', ['about' => $about]);
    }
}
