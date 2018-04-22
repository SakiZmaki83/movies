<!doctype html>
<html>
    <head>

    </head>
    <body>
       <h2> {{ $movie->title }} </h2>

        Genre: {{ $movie->genre }}<br>
        Director: {{ $movie->director }} <br>
        Year: {{ $movie->year_created}}<br>
        Story: {{ $movie->storyline }}
        
    </body>
</html>
