@extends('layouts.layout')

@section('content')
<style>
    .win {
        background-color: rgba(50, 244, 20, 0.90);
        padding: 5px;
        width: 35px;
        text-align: center;
        color: #ffffff;
        font-weight: bold;
    }

    .lose {
        background-color: rgba(244, 20, 50, 0.80);
        padding: 5px;
        width: 35px;
        text-align: center;
        color: #eeeeee;
        font-weight: bold;
    }

    .draw {
        background-color: rgba(20, 150, 255, 0.53);
        padding: 5px;
        width: 35px;
        text-align: center;
        color: #eeeeee;
        font-weight: bold;
    }

    .grey-imp {
        background-color: rgba(122, 122, 122, 0.04) !important;
    }

    .report-card-title {
        color: #991515 !important;
        font-weight: bold;
    }
</style>

<h1 class="text-center">Sunderland Samba Kenya Match Reports</h1>
<div class="mssg"> {{ session('mssg') }}</div>
<div class="d-flex flex-wrap p-1">
    @foreach($reports as $report)
    <div class="card m-4 grey-imp" style="width: 18rem;">
        <a href="/football/sunderland/reports/{{$report->id}}">
            <img class="p-1 card-img-top" src="/storage/{{$report->img}}" alt="Card image cap">
        </a>
        <div class="card-body">
            <p class="report-card-title">{{$report->title}}</p>

            <p>{{ $report->date }}</p>
            @if($report->result == 0)
            <p class="lose">L</p>
            @endif
            @if($report->result == 1)
            <p class="draw">D</p>
            @endif
            @if($report->result == 2)
            <p class="win">W</p>
            @endif
        </div>
    </div>
    @endforeach
</div>
<a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
