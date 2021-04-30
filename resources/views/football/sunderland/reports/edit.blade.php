@extends('layouts.layout')
@section('content')
<div class="d-flex flex-column page-size p-2">
    <h1>Add a Player to Squad</h1>
    <div clas="mssg"></div>
    <form class="d-flex flex-column create-form p-3" action="/football/sunderland/squad/{{$squad->id }}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Put')
        <textarea name="bio" id="bio" cols="70" rows="10">
        {{ $squad->bio }}
        </textarea>
        <br>
        <img src="/img/squads/{{$squad->img}}" width="300px" alt="">
        </div>
        <label for="img">Squad Image</label>
        <input class="p-1 m-1" type="file" id="img" name="img"> 
    <br>
        <input class="btn btn-info px-3 mx-auto my-2" type="submit" value="Update Squad">
    </form>
</div>
@endsection