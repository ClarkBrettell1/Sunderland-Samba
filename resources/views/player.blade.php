<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="card m-3" style="width: 22rem;">
    <img class="p-2 card-img-top" src="/img/{{$player->id}}.jpg" alt="Card image cap">
    <div class="card-body">
        <p class="card-text text-center">{{ $player->first_name }} {{ $player->last_name }}</p>
        <p class="card-text text-center">{{ $player->position }}</p>
    </div>
</div>
</body>
</html>
