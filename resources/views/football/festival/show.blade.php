@extends('layouts.layout')

@section('content')
 <h1 class="text-center">Festival Of Football</h1>
 <div class="mssg"> {{ session('mssg') }}</div>

    <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
