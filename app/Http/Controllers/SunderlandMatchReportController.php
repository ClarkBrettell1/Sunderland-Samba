<?php

namespace App\Http\Controllers;

use App\Models\SunderlandPlayers;
use Illuminate\Http\Request;

class SunderlandPlayersController extends Controller
{


    public function index(){
        $players = \DB::table('sunderland_players')->get();
        return view('football.sunderland.players.index', ['players' => $players]);
    }
    public function show($id)
    {
        $player = \DB::table('sunderland_players')->where('id', $id)->first();
        return view('football.sunderland.players.show', ['player' => $player ]);
    }

    public function create() {
        return view('football.sunderland.players.create');
    }


    public function edit($id)
    {
        $player = SunderlandPlayers::find($id);
        return view('football.sunderland.players.edit', ['player' => $player]);        
    }

    public function store(Request $request) {

        $newImageName = time() . '_' . $request->first_name . '.' . $request->img->extension();
    
        $request->img->move(public_path('img/players'), $newImageName);

        $player = new SunderlandPlayers();

            $player->first_name = $request->input('first_name');
            $player->last_name = $request->input('last_name');
            $player->nickname = $request->input('nickname');
            $player->bio = $request->input('bio');
            $player->position = $request->input('position');
            $player->img = $newImageName;
            $player->save();

            return redirect('/football/sunderland/players')->with('mssg', "Player added to the squad");

    }


    public function update(Request $request, $id) {

        $player = SunderlandPlayers::find($id);

        if($request->img){
            $replaceImageName = time() . '_' . $request->first_name . '.' . $request->img->extension();

            $request->img->move(public_path('img/players'), $replaceImageName);
        }        

        else  {
            $replaceImageName = $player->img;
        }
 
        $player->first_name = $request->input('first_name');
        $player->last_name = $request->input('last_name');
        $player->position = $request->input('position');
        $player->bio = $request->input('bio');
        $player->position = $request->input('position');
        $player->img = $replaceImageName;
        $player->save();

        return redirect('/football/sunderland/players')->with('mssg', "Player was updated");
    }


    public function destroy($player){
        $player = SunderlandPlayers::findOrFail($player);
        $player->delete();
    }
}
