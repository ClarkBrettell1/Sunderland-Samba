@extends('layouts.layout')

@section('content')
    <h1 class="text-center">Samba News</h1>
   <div class="container d-flex flex-wrap">
   @foreach($news as $newsitem)
       <div class="col-sm-6 p-2">
               <div class="card">
                   <img class="card-img-top" src='/img/news/{{$newsitem->banner_img}}' alt="Card image cap">
                   <div class="card-body">
                       <h5 class="card-title">{{$newsitem->title}}</h5>
                       <p class="text-muted">Published at {{date_format(new DateTime($newsitem->created_at), "d/m/Y")}}</p>
                       <p class="card-text">{{implode(' ', array_slice(explode(' ', $newsitem->summary), 0, 17))."\n" ."....." }}</p>
                       <a href="/news/{{$newsitem->slug}}" class="btn btn-primary">Read Story</a>
                   </div>
               </div>
           </div>    
           @endforeach
   </div>
      <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
