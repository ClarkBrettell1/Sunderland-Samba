@extends('layouts.layout')

@section('content')

<style>
    .side-image{
        max-width: 360px;
    }

    .side-text {
        max-width: 1000px;
    }

    .section-wrap {
        background: linear-gradient(100deg, #c0b7b791 50%, #cac4c491 50%);
        justify-content: center;
    }

    .section-wrap h2 {
        text-align: center;
        margin: 20px 0px
    }
    
    .section-wrap-alt {
        background: linear-gradient(260deg, #c0b7b791 50%, #cac4c491 50%);
        justify-content: center;
    }

    .section-wrap-alt h2 {
        text-align: center;
        margin: 20px 0px
    }
</style>
     
        

    
        <div class="d-flex flex-wrap section-wrap m-5">
            <div class="mx-5 w-100">
                <h2 class="mx-5">
                    Sunderland Samba Mens Players
                </h2>
            </div>
            <div class="d-flex side-image">
                <img class="p-2 m-2 w-100" src="\img\players\bally.jpg" alt="test">
            </div>
            <div class="d-flex flex-column side-text">
                <p class="p-2 mx-4 my-1">
                   Sunderland Samba play mens football in the North East of England. The team has been going for many years and have continued no matter the adversity or successes they have encountered. The squad is often mixture of faiths and backgrounds who all come together to represent Sunderland Samba on Saturday Mornings. 
                </p>
                <p class="p-2 mx-4 my-1">
                    Click here to read more about the current crop of players who make up the squad which represents Sunderland Samba in the North East Christian Fellowship League. 
                </p>
            </div>
            <div class="d-flex w-100 justify-content-center">
                <a class="btn btn-primary my-5 p-2 border rounded" href="sunderland/players">Players</a>
            </div>
         </div>
        </div>
       

        <div class="d-flex flex-wrap section-wrap m-5">
            <div class="mx-5 w-100">
                <h2 class="mx-5">
                    Sunderland Match Reports
                </h2>
            </div>
            <div class="d-flex side-image">
                <img class="p-2 m-2 w-75" src="\img\players\kenya.jpg" alt="test">
            </div>
            <div class="d-flex flex-column side-text">
                <p class="p-2 mx-4 my-1">
                    Sunderland Samba try their very best to supply stakeholders with access to how the team is performning and information about matches. This sometimes done by producing a match report to show summarise the performance. These reports highlights and low points will be included in the reports. These are written by volunteers and admins for the site. Sadly we may not be able to provide a match report for every game due to time restrictions of the admin team, Sunderland Samba will endeavour to have as many as is possible.
                </p>
                <p class="p-2 mx-4 my-1">
                    Click the link below, to access the list of the report which have been written in regard to the Sunderland Samba Men's Team. Any issue with anything on these match reports, contact John Boyd to discuss further. 
                </p>
            </div>
        <div class="d-flex w-100 justify-content-center">
            <a class="btn btn-primary my-5 p-2 border rounded" href="sunderland/reports">Match Reports</a>
        </div>
        </div>
    </div>


    <div class="d-flex flex-wrap section-wrap m-5">
        <div class="mx-5 w-100">
            <h2 class="mx-5">
                View League Table
            </h2>
        </div>
        <div class="d-flex side-image">
            <img class="p-2 m-2 w-100" src="\img\league.png" alt="test">
        </div>
        <div class="d-flex flex-column side-text">
            <p class="p-2 mx-4 my-1">
                All information about the league tables and cup performances of Sunderland is hosted on a 3rd party website. You can view fixtures, a head to head grid and also the league table. 
            </p>
            <p class="p-2 mx-4 my-1">
               Click the button to visit the league table and other stats. Forza Samba!
            </p>
        </div>
    <div class="d-flex w-100 justify-content-center">
        <a class="btn btn-primary my-5 p-2 border rounded" target="_blank" href="https://football.mitoo.co.uk/LeagueTab.cfm?TblName=Matches&DivisionID=935&LeagueCode=NECFL2022">League Table</a>
    </div>
    </div>
</div>

                
   

    <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
