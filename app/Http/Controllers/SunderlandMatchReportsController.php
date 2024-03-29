<?php

namespace App\Http\Controllers;


use App\Models\SunderlandMatchReports;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;



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
        $this->middleware('auth');
        $report = SunderlandMatchReports::find($id);
        return view('football.sunderland.reports.edit', ['report' => $report]);
    }

    public function store(Request $request)
    {   
        $manager = new ImageManager();

        $newTwoImageName = '';
        $newThreeImageName = '';

        $newImageName = time() . '_' . $request->title . '.' . $request->img->extension();
     
        $request->img->move(public_path('/storage'), $newImageName);

   

        if(isset($request->img_2)){
            $newTwoImageName = time() . '_2' . $request->title . '.' . $request->img_2->extension();
            $request->img_2->move('/storage', $newTwoImageName);
        }

        if(isset($request->img_3)){
        
        $newThreeImageName = time() . '_3' . $request->title . '.' . $request->img_3->extension();
        $request->img_3->move('/storage', $newThreeImageName);
        // $request->img_3->move(public_path('img/reports'), $newThreeImageName);

        }

        $report = new SunderlandMatchReports();

        $date1 = strtr($request->input('date'), '/', '-');
        // echo $date1;

        $report->title = $request->input('title');
        $report->date = date('Y-m-d', strtotime($date1));

        // echo $report->date;
     

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



        return redirect('/football/sunderland/reports')->with('mssg', "Match Report Added");
    }

 


    public function update(Request $request, $id)
    {

        
        $report = SunderlandMatchReports::find($id);

        $manager = new ImageManager();

        $trimmedtitle = str_replace(' ','_', $request->title);

        $replaceImageName = $report->img;
        $replaceTwoImageName = $report->img_2;
        $replaceThreeImageName = $report->img_3;
        
        if ($request->img) {
            $replaceImageName = time() . '_' . $trimmedtitle . '.' . $request->img->extension();
            $request->img->move(public_path('img/reports'), $replaceImageName);

        } 

        if ($request->img_2) {
            $replaceTwoImageName = time() . '_2' . $trimmedtitle . '.' . $request->img_2->extension();
            $request->img_2->move(public_path('img/reports'), $replaceTwoImageName);
        } 

        if ($request->img_3) {
            $replaceThreeImageName = time() . '_3' . $trimmedtitle . '.' . $request->img_3->extension();
            $request->img_3->move(public_path('img/reports'), $replaceThreeImageName);
        } 


        if($request->img){

            $img = $manager->make('img/reports/' .  $replaceImageName )->resize(600,400);
    
            $img->save('img/reports/' . "r" .  $replaceImageName , 100);
            $replaceImageName = "r" . $replaceImageName;
        }


        if($request->img_2){
            $img2 = $manager->make('img/reports/' . $replaceTwoImageName )->resize(600,400);
            $img2->save('img/reports/' . "r" .  $replaceTwoImageName , 100);
            $replaceTwoImageName = "r" . $replaceTwoImageName;
        }

      if($request->img_3){
        $img3 = $manager->make('img/reports/' .  $replaceThreeImageName)->resize(600,400);
        $img3->save('img/reports/' . "r" .  $replaceThreeImageName , 100);
        $replaceThreeImageName = "r" . $replaceThreeImageName;

      }

        $report->title = $request->input('title');
        // $report->date = date('Y-m-d', strtotime($request->input('date')));

        
        $date1 = strtr($request->input('date'), '/', '-');
        // echo $date1;

        $report->title = $request->input('title');
        $report->date = date('Y-m-d', strtotime($date1));

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
        $report->img_2 = $replaceTwoImageName;
        $report->img_3 = $replaceThreeImageName;
        $report->save();



        return redirect('/football/sunderland/reports')->with('mssg', "Match Report was updated");
    }


    public function destroy($report)
    {
        $report = SunderlandMatchReports::findOrFail($report);
        $report->delete();
    }
}
