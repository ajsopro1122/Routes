<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo | Profile</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <style>
        li {
            margin-left:5%;
        }
    </style>
</head>
<body>
    <h1>Kdrama Adik</h1>
    <a href="{{url('/')}}">Home</a> | <a href="{{url('/popularity')}}">Popularity</a>  | Most Recommended
    <h4 style="margin-top:3%">Most Recommended Kdrama</h4>
    <li>Memories of Alhambra</li>
    <li>My Holo Love</li>
    <li>Are you a Robot</li>
    <li>Are you a Human</li>
    <li>W Two Worlds</li>
</body>
</html>