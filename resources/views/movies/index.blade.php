<!doctype html>
<html>
    <head>
        <title> All films </title>
    </head>
    <body>
<ul>
    @foreach($movies as $movie)
        <li><a href="{{ route('single-movie', ['id'=> $movie->id ]) }}">{{ $movie->title }}</a></li>
        <p>{{ $movie->storyline }}</p>
    @endforeach
</ul>   
    </body>
</html>
