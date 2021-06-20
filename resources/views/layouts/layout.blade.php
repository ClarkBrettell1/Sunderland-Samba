<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sunderland Samba FC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/public/js/glDatePicker.min.js"></script>
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">


    <!-- <link rel="stylesheet" type="text/css" href="css/trix.css">
    <script src="{{ asset('js/trix.js') }}"></script>
    <script src="{{ asset('js/attachments.js') }}"></script> -->

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<header>

    <div class="row px-0 m-0">
        <div class="col px-0">
            <ul class="nav" id="mainNav">
                <li class="nav-item w-100">
                    <div class="d-flex w-100 justify-content-around align-items-center p-2">
                    <img src="/img/icon.png" alt="Sunderland Samba Logo" width="90px" style="margin: 0; padding: 0;" class="p-1">
                    <h1 style="color:white;">Sunderland Samba</h1>
                    <div>
                    <a class="btn btn-primary m-1 p-2 header-btn" href="https://www.goldengiving.com/charity/sunderland-samba" target="_blank">Donate</a><br>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="nav justify-content-center" id="mainNavLinks">
    <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link" href="/football">Football</a>
                        <div>
                            <div class="dropdown-content">
                                <a class="nav-link" href="/football/sunderland">Sunderland Mens's Team</a>
                                <a class="nav-link" href="/football/kenya">Kenyan Women's Team</a>
                                <a class="nav-link" href="/football/festival">Festival of Football</a>
                                <a class="nav-link" href="/football/volunteer">Volunteering Oppurtunities</a>
                            </div>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/news">News</a>
                </li>      
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/about">Partners and Sponsors</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>



</header>

<body>
    @yield('content')
</body>
<footer>
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>About Us</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Football</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="/football/sunderland">Sunderland Team</a></li>
                    <li><a href="/football/sunderland">Results</a></li>
                    <li><a href="players">Squad</a></li>
                    <li><a href="fixtures">Sunderland Team</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>News</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="/news">Latest News</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">© All right Reversed. Sunderland Samba</p>
            </div>
            <hr>
        </div>
    </div>
</footer>

</html>