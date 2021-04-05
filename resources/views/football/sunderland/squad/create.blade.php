@extends('layouts.layout')
@section('content')
<div class="d-flex flex-column page-size p-2">
    <h1>Add The Squad Info</h1>
    <div clas="mssg"></div>
    <form class="d-flex flex-column create-form p-3" action="/football/sunderland/squad" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="bio">Squad Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10">
        </textarea>
        <br>
        <label for="img">Squad Image</label>
        <input class="p-1 m-1" type="file" id="img" name="img"> 
        <input class="btn btn-info px-3 mx-auto my-2" type="submit" value="Add Squad">
    </form>
</div>
@endsection