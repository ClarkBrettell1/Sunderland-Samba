@extends('layouts.layout')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
       <h1 class="display-4">{{$article->title}}</h1>
        <p class="lead">{{ $article->body_one }}</p>
   </div>
 </div>
<a class="btn btn-primary m-1 p-2 border rounded" href="/news">Back to news</a>
@endsection
