@extends('layouts.layout')

@section('content')
<style>
    .win {
        background-color: rgba(50, 244, 20, 0.90);
        padding: 4px;
        width: 30px;
        text-align: center;
        color: #ffffff;
        font-weight: bold;
        text-align: center
    }

    .lose p{
        background-color: rgba(244, 20, 50, 0.80);
        padding: 4px;
        width: 30px;
        text-align: center;
        color: #eeeeee;
        font-weight: bold;
    }

    .lose div {
        padding: 4px;
        background-color: lightgrey;
        height: 32px;
        margin: 0;
    }

    .draw {
        background-color: rgba(20, 150, 255, 0.53);
        padding: 4px;
        width: 30px;
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

    .venue p{
        text-align: center;
        background-color:rgb(184, 184, 184);
        color: #000;
        width: 120px;
        padding: 4px;    
        border-right: #8d1313d7 2px solid;
        }

        .score p{
        background-color: lightgrey;
        width: 120px;
        padding: 4px;
        border-right: #8d1313d7 2px solid;
        }

        .title {
            font-size: 1.4rem;
        }
</style>


<div class="d-flex flex-column container-fluid align-items-center ">
    <h1 class="title">{{$report->title}}</h1>

    <div class="d-flex align-items-center ">
        @if ($report->home == 1)
           <div class="venue"><p>Venue: Home</p></div>
        @endif
        @if ($report->home == 0)
        <div class="venue"><p>Venue: Away</p></div>
     @endif

<div class="d-flex score">
   <div><p>Score: {{$report->home_goals}}-{{$report->away_goals}}</p></div> 
</div>

        @if($report->result == 0)
        <div class=" d-flex lose"> <div>Result:</div><p>L</p> </div>
        @endif
        @if($report->result == 1)
        <p class="draw">Result: D</p>
        @endif
        @if($report->result == 2)
        <p class="win">Result: W</p>
        @endif
        
    </div>
 
    <div class="d-flex w-100 container-fluid align-items-center justify-content-center">
        <img src="/img/reports/{{$report->img}}" alt="" class="w-75" >
    </div>
    
    <p>
    {{$report->paragraph_1}}
    </p>
    <p>
    {{$report->paragraph_1}}
    </p>
    <p>
    {{$report->paragraph_1}}
    </p>
</div>

<a class="btn btn-primary m-1 p-2 border rounded" href="/football/sunderland/reports"><i class="lni lni-angle-double-left p-1"></i>Back to reports</a>
@endsection
