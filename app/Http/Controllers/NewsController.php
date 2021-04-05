<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function index(){
        $news = \DB::table('news')->get();
        return view('news.index', ['news' => $news]);
    }
    public function show($slug)
    {
        $article = \DB::table('news')->where('slug', $slug)->first();
        return view('news.show', ['article' => $article ]);
    }

    public function create() {
        return view('news.create');
    }

    public function store(Request $request) {

        $newImageName = time() . '_' . $request->title . '.' . $request->banner_img->extension();
    
        $request->banner_img->move(public_path('img/news'), $newImageName);

        $newBodyName = time() . '_' . $request->slug . '.' . $request->body_img->extension();
    
        $request->body_img->move(public_path('img/news'), $newBodyName);

        $article = new News();

            $article->title = $request->input('title');
            $article->slug = $request->input('slug');
            $article->meta_title = $request->input('meta_title');
            $article->meta_desc = $request->input('meta_desc');
            $article->summary = $request->input('summary');
            $article->body_one = $request->input('body_one');
            $article->banner_img = $newImageName;
            $article->body_two = $request->input('body_two');
            $article->body_img = $newBodyName;
            $article->save();

            return redirect('/news')->with('mssg', "Article added to the site");

    }

    public function destroy($article){
        $article = News::findOrFail($article);
        $article->delete();
    }

    public function upload(Request $request)
{
    if($request->hasFile('file')) {
        //get filename with extension
        $filenamewithextension = $request->file('file')->getClientOriginalName();
  
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
  
        //get file extension
        $extension = $request->file('file')->getClientOriginalExtension();
  
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
  
        //Upload File
        $request->file('file')->storeAs('public/uploads', $filenametostore);
  
        // you can save image path below in database
        $path = asset('storage/uploads/'.$filenametostore);
 
        echo $path;
        exit;
    }
}
}
