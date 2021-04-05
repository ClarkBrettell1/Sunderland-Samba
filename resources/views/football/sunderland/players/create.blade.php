@extends('layouts.layout')
@section('content')
<div class="d-flex flex-column page-size p-2">
    <h1>Add a Player to Squad</h1>
    <div clas="mssg"></div>
    <form class="d-flex flex-column create-form p-3" action="/football/sunderland/players" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="first_name">Player First Name</label>
        <input class="p-1 m-1" type="text" id="first_name" name="first_name">
        <label for="last_name">Player Last Name</label>
        <input class="p-1 m-1" type="text" id="last_name" name="last_name">
        <label for="nickname">Player Nickname</label>
        <input class="p-1 m-1" type="text" id="nickname" name="last_nickname">
        <label for="bio">Player Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10">
        </textarea>
        <br>
        <label for="img">Player Image</label>
        <input class="p-1 m-1" type="file" id="img" name="img"> 
        <label for="position">Position:</label>
        <input type="text" name="position" id="position">
        <input class="btn btn-info px-3 mx-auto my-2" type="submit" value="Add Player">
    </form>
</div>
@endsection