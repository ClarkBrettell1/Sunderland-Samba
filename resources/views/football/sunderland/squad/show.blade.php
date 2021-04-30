@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-center ">
<div class="card m-1" style="width: 17rem;">
    <img class="p-2 card-img-top" src="/img/players/{{$player->img}}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text text-center">Name: {{ $player->first_name }} {{ $player->last_name }}</p>
        <p class="card-text text-center">Position:{{ $player->position }}</p>
        @if($player->goals)
        <p class="card-text text-center">Goals this Season: {{ $player->goals}}</p>
        @endif
        <p class="card-text text-center">Nickname: {{ $player->nickname }}</p>
    </div>
</div>
<div class="card m-1" style="width: 25rem;">
    <div class="card-body">
        <h1 class="text-center">About {{$player->first_name }}</h1>
        <p class="card-text text-center">Bio: {{ $player->bio }}</p>
    </div>
</div>
</div>
<a class="btn btn-primary m-1 p-2 border rounded" href="football/sunderland/players"><i class="lni lni-angle-double-left p-1"></i>Back to players</a>
@endsection
