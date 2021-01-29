@extends('layouts.layout')

@section('content')
    <h1 class="text-center">Samba News</h1>
    <div class="container d-flex flex-wrap">

        <div class="col-sm-6 p-2">
                <div class="card">
                    <img class="card-img-top" src='/img/squad.jpg' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Squad Voted Most Handsome</h5>
                        <p class="card-text">John Boyd's squad won the title of most handsome christian football squad north east region</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <div class="col-sm-6 p-2">
            <div class="card">
                <img class="card-img-top" src='/img/squad.jpg' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Squad Voted Most Handsome</h5>
                    <p class="card-text">John Boyd's squad won the title of most handsome christian football squad north east region</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>

@endsection
