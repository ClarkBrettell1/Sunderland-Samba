@extends('layouts.layout')

@section('content')
    <h1 class="text-center">Sunderland Samba Squad</h1>
    <div class="d-flex flex-wrap p-1">
        @foreach($players as $player)
            <div class="card m-4" style="width: 18rem;">
                <a href="/players/{{$player->id}}">
                    <img class="p-2 card-img-top" src="/img/{{$player->id}}.jpg" alt="Card image cap">
                </a>
                <div class="card-body">
                    <p class="card-text text-center">{{ $player->first_name }} {{ $player->last_name }}</p>
                    <p class="card-text text-center">{{ $player->position }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="btn btn-primary m-1 p-2 border rounded" href="/">Home</a>
@endsection
