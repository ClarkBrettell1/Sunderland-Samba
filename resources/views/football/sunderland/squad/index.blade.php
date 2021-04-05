@extends('layouts.layout')

@section('content')
 <h1 class="text-center">Sunderland Samba Squad</h1>
 <div class="mssg"> {{ session('mssg') }}</div>
 <div class="d-flex flex-wrap p-1">
     @foreach($squads as $squad)
                 <img class="p-2 card-img-top" src="/img/squads/{{$squad->img}}" alt="Card image cap">
                 <p>{{$squad->bio}}</p>
        @endforeach
    </div>
    <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
