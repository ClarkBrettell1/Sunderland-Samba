<?php

namespace App\Http\Controllers;

use App\Models\SunderlandSquad;
use Illuminate\Http\Request;

class SunderlandSquadController extends Controller
{


    public function index(){
        $squads = \DB::table('sunderland_squads')->get();
        return view('football.sunderland.squad.index', ['squads' => $squads]);
    }
    public function create() {
        return view('football.sunderland.squad.create');
    }


    public function edit($id)
    {
        $squad = SunderlandSquad::find($id);
        return view('football.sunderland.squad.edit', ['squad' => $squad]);        
    }

    public function store(Request $request) {

        $newImageName = time() . '_' . $request->first_name . '.' . $request->img->extension();
    
        $request->img->move(public_path('img/squads'), $newImageName);

        $squad = new SunderlandSquad();

            $squad->bio = $request->input('bio');
           
            $squad->img = $newImageName;
            $squad->save();

            return redirect('/football/sunderland/squad')->with('mssg', "Squad Updated");

    }


    public function update(Request $request, $id) {

        $squad = SunderlandSquad::find($id);

        if($request->img){
            $replaceImageName = time() . '_' . $request->first_name . '.' . $request->img->extension();

            $request->img->move(public_path('img/squads'), $replaceImageName);
        }        

        else  {
            $replaceImageName = $squad->img;
        }
 

        $squad->bio = $request->input('bio');

        $squad->save();

        return redirect('/football/sunderland/squad')->with('mssg', "Squad was updated");
    }


    public function destroy($player){
        $player = SunderlandPlayers::findOrFail($player);
        $player->delete();
    }
}
