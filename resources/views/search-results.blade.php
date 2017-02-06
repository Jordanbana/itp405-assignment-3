<!DOCTYPE html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
  <head>
    <meta charset="utf-8">
    <title>Search {{ $search }}</title>
  </head>
  <body>

    <br>

    <div class="container">

      <h2>Movies for Search '{{$search}}':</h2>
      @foreach($dvds as $dvd)
        <ul>
            <li><b>{{ $dvd->title }}</b></li>
            <li>{{ $dvd->rating_name}}</li>
            <li>{{ $dvd->genre_name}}</li>
        </ul>
      @endforeach

    </div>

  </body>
</html>
