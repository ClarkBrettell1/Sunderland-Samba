@extends('layouts.layout')

@section('content')
<div class="card m-4" style="width: 17rem;">
    <img class="p-2 card-img-top" src="/img/{{$player->id}}.jpg" alt="Card image cap">
    <div class="card-body">
        <p class="card-text text-center">{{ $player->first_name }} {{ $player->last_name }}</p>
        <p class="card-text text-center">{{ $player->position }}</p>
    </div>
</div>
@endsection
