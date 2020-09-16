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
    <a href="{{url('/')}}">Home</a> | Popularity | <a href="{{url('/recommended')}}">Most Recommended</a> 
    <h4 style="margin-top:3%">Popular Kdrama</h4>
    <li>Goblin</li>
    <li>Scarlet Heart Ryeo</li>
    <li>While You Where Sleeping</li>
    <li>Legend Of The Blue Sea</li>
    <li>Strong Woman Do Bong Soon</li>
</body>
</html>