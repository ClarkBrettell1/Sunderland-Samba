@extends('layouts.layout')
@section('content')
    <div class="d-flex flex-column create-pizza">
        <h1>Add a Player to Squad</h1>
        <div clas="mssg"></div>
        <form class="d-flex flex-column create-form p-1" action="/players" method="POST">
            @csrf
            <label for="first_name">Player First Name</label>
            <input class="p-1 m-1" type="text" id="first_name" name="first_name">
            <label for="last_name">Player Last Name</label>
            <input class="p-1 m-1" type="text" id="last_name" name="last_name">

            <label for="position">Position:</label>
            <select class="p-1 m-1" name="position" id="position">
                <option value="goalkeeper">Goalkeeper</option>
                <option value="defender">Defender</option>
                <option value="volcano">Midfielder</option>
                <option value="veg supreme">Forward</option>
            </select>
            <input class="btn btn-success p-3 m-2" type="submit" value="Add Player">
        </form>
    </div>
@endsection
