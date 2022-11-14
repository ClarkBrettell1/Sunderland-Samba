@extends('layouts.layout')

@section('content')
<style>
    .win {
        background-color: rgba(50, 244, 20, 0.90);
        padding: 4px;
        min-width: 50px;
        text-align: center;
        color: #ffffff;
        font-weight: bold;
        text-align: center border: #6d9dbd70 0.5px solid;
    }

    .lose p {
        background-color: rgba(244, 20, 50, 0.80);
        padding: 4px;
        min-width: 50px;
        text-align: center;
        color: #eeeeee;
        font-weight: bold;
        border: #6d9dbd70 0.5px solid;
    }

    .lose div {
        padding: 4px;
        background-color: lightgrey;
        height: 32px;
        margin: 0;
        border: #6d9dbd70 0.5px solid;
    }

    .draw {
        background-color: rgba(20, 150, 255, 0.53);
        padding: 4px;
        min-width: 50px;
        text-align: center;
        color: #eeeeee;
        font-weight: bold;
        border: #4d647470 0.5px solid;
    }

    .body-text {
        width: 70%;
        padding: 15px;
        font-size: 1.1rem;
        margin: 5px 30px 0px 30px;
        line-height: 1.7rem;
    }

    .grey-imp {
        background-color: rgba(122, 122, 122, 0.04) !important;
    }

    .report-card-title {
        color: #991515 !important;
        font-weight: bold;
    }

    .report_img {
        width: 70%;
        padding: 15px;
    }

    .d-shadow {
        filter: drop-shadow(0px 3px 1px rgba(45, 45, 49, 0.213));
    }

    .venue p {
        text-align: center;
        background-color: rgb(233, 234, 242);
        color: #000;
        width: 120px;
        padding: 4px;
        border: #6d9dbd70 0.5px solid;
    }

    .score p {
        background-color: rgb(233, 234, 242);
        width: 120px;
        padding: 4px;
        border: #6d9dbd70 0.5px solid;
    }

    .title {
        font-size: 1.4rem;
    }

    @media (max-width: 1100px) {

        .report_img {
            width: 80%;
        }

        
        .body-text {
            width: 80%;
            padding: 15px;
            font-size: 1.1rem;
            
        }

    }


    @media (max-width: 800px) {

        .report_img {
            width: 100%;
        }

        .body-text {
            width: 100%;
            padding: 15px;
            font-size: 1.1rem;
            
        }


    }

</style>


<div class="d-flex flex-column container-fluid align-items-center ">
    <h1 class="title">{{$report->title}}</h1>

    <div class="d-flex align-items-center">
        @if ($report->home == 1)
        <div class="venue d-shadow">
            <p>Venue: Home</p>
        </div>
        @endif
        @if ($report->home == 0)
        <div class="venue d-shadow">
            <p>Venue: Away</p>
        </div>
        @endif

        <div class="d-flex score d-shadow">
            <div>
                <p>Score: {{$report->home_goals}} - {{$report->away_goals}}</p>
            </div>
        </div>

        @if($report->result == 0)
        <div class=" d-flex lose">
            <div>Result:</div>
            <p>L</p>
        </div>
        @endif
        @if($report->result == 1)
        <p class="draw d-shadow">Result: D</p>
        @endif
        @if($report->result == 2)
        <p class="win">Result: W</p>
        @endif

    </div>

    <div class="d-flex w-100 container-fluid align-items-center justify-content-center">
        <img src="/storage/{{$report->img}}" alt="" class="report_img">
    </div>

    <p class="body-text">
        {{$report->paragraph_1}}
    </p>
    @if ($report->paragraph_2)
    <p class="body-text">
        {{$report->paragraph_2}}
    </p>
    @endif
    @if ($report->img_2)
    <img src="/storage/{{$report->img_2}}" alt="" class="report_img">
    @endif
    @if ($report->paragraph_3)
    <p class="body-text">
        {{$report->paragraph_3}}
    </p>
    @endif
    @if ($report->paragraph_4)
    <p class="body-text">
        {{$report->paragraph_4}}
    </p>
    @endif
    @if ($report->img_3)
    <img src="/storage/{{$report->img_3}}" alt="" class="report_img">
    @endif
    @if ($report->paragraph_5)
    <p class="body-text">
        {{$report->paragraph_5}}
    </p>
    @endif

</div>

<a class="btn btn-primary m-1 p-2 border rounded" href="/football/sunderland/reports"><i
        class="lni lni-angle-double-left p-1"></i>Back to reports</a>
@endsection
