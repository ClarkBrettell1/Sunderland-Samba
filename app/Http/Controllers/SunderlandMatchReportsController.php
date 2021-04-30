<?php

namespace App\Http\Controllers;

use App\Models\SunderlandMatchReports;
use Illuminate\Http\Request;

class SunderlandMatchReportsController extends Controller
{


    public function index()
    {
        $reports = \DB::table('sunderland_match_reports')->get();
        return view('football.sunderland.reports.index', ['reports' => $reports]);
    }
    public function show($id)
    {
        $report = \DB::table('sunderland_match_reports')->where('id', $id)->first();
        return view('football.sunderland.reports.show', ['report' => $report]);
    }

    public function create()
    {
        return view('football.sunderland.reports.create');
    }


    public function edit($id)
    {
        $report = SunderlandMatchReports::find($id);
        return view('football.sunderland.reports.edit', ['report' => $report]);
    }

    public function store(Request $request)
    {   

        $newTwoImageName = '';
        $newThreeImageName = '';

        $newImageName = time() . '_' . $request->title . '.' . $request->img->extension();
        $request->img->move(public_path('img/reports'), $newImageName);

        if(isset($request->img_2)){
            $newTwoImageName = time() . '_2' . $request->title . '.' . $request->img_2->extension();
            $request->img_2->move(public_path('img/reports'), $newTwoImageName);
        }

        if(isset($request->img_3)){
        
        $newThreeImageName = time() . '_3' . $request->title . '.' . $request->img_3->extension();
        $request->img_3->move(public_path('img/reports'), $newThreeImageName);

        }

        $report = new SunderlandMatchReports();

        $report->title = $request->input('title');
        $report->date = date('Y-m-d', strtotime($request->input('date')));

        $report->result = $request->input('result');
        $report->home = $request->input('home');
        $report->home_goals = $request->input('home_goals');
        $report->away_goals = $request->input('away_goals');
        $report->paragraph_1 = $request->input('paragraph_1');
        $report->paragraph_2 = $request->input('paragraph_2');
        $report->paragraph_3 = $request->input('paragraph_3');
        $report->paragraph_4 = $request->input('paragraph_4');
        $report->paragraph_5 = $request->input('paragraph_5');
        $report->img = $newImageName;
        $report->img_2 = $newTwoImageName;
        $report->img_3 = $newThreeImageName;
        $report->save();

        return redirect('/football/sunderland/players')->with('mssg', "Match Report Added");
    }

 


    public function update(Request $request, $id)
    {

        $report = SunderlandMatchReports::find($id);

        if ($request->img) {
            $replaceImageName = time() . '_' . $request->title . '.' . $request->img->extension();

            $request->img->move(public_path('img/reports'), $replaceImageName);
        } else {
            $replaceImageName = $report->img;
        }

        if ($request->img) {
            $replaceTwoImageName = time() . '_2' . $request->title . '.' . $request->img_2->extension();

            $request->img_2->move(public_path('img/reports'), $replaceTwoImageName);
        } else {
            $replaceTwoImageName = $report->img;
        }

        if ($request->img) {
            $replaceTwoImageName = time() . '_3' . $request->title . '.' . $request->img_3->extension();

            $request->img_3->move(public_path('img/reports'), $replaceThreeImageName);
        } else {
            $replaceTwoImageName = $report->img;
        }

        $report->title = $request->input('title');
        $report->fixture_date = $request->input('fixture_date');
        $report->result = $request->input('result');
        $report->home = $request->input('home');
        $report->home_goals = $request->input('home_goals');
        $report->away_goals = $request->input('away_goals');
        $report->home_goals = $request->input('home_goals');
        $report->paragraph_1 = $request->input('paragraph_1');
        $report->paragraph_2 = $request->input('paragraph_2');
        $report->paragraph_3 = $request->input('paragraph_3');
        $report->paragraph_4 = $request->input('paragraph_4');
        $report->paragraph_5 = $request->input('paragraph_5');
        $report->img = $replaceImageName;
        $report->img = $replaceTwoImageName;
        $report->img = $replaceThreeImageName;
        $report->save();

        return redirect('/football/sunderland/players')->with('mssg', "Player was updated");
    }


    public function destroy($report)
    {
        $report = SunderlandMatchReports::findOrFail($player);
        $report->delete();
    }
}
