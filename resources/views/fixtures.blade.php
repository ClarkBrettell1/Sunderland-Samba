@extends('layouts.layout')

@section('content')
    <div class="container py-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">League</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fixtures/Results</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">League Table</h5>
                <div class="league-table"></div>

                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>



@endsection
