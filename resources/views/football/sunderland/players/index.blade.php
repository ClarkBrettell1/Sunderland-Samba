@extends('layouts.layout')

@section('content')
 <h1 class="text-center">Sunderland Samba Mens Squad</h1>
 <div class="mssg"> {{ session('mssg') }}</div>
 <div class="d-flex flex-wrap p-1">
     @foreach($players as $player)
                <div class="card m-4" style="width: 18rem;">
             <a href="/football/sunderland/players/{{$player->id}}">
                 <img class="p-2 card-img-top" src="/img/players/{{$player->img}}" alt="Card image cap">
             </a>
             <div class="card-body">
                 <p class="card-text text-center">{{ $player->first_name }} {{ $player->last_name }}</p>
                    <p class="card-text text-center">{{ $player->position }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
