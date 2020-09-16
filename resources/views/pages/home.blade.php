<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <style>
        li {
            margin-left:5%;
        }
    </style>
</head>
<body>
    <h1>Kdrama Adik</h1>
    Home | <a href="{{url('/popularity')}}">Popularity</a>  | <a href="{{url('/recommended')}}">Most Recommended</a> 
    <h4 style="margin-top:3%">Kdrama Sort By</h4>
    <li> 
        <a href="{{url('/popularity')}}">Popularity</a> 
    </li>
    <li>
        <a href="{{url('/recommended')}}">Most Recommended</a> 
    </li>
</body>
</html>