<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search {{ $search }}</title>
  </head>
  <body>

    <br>


      Movies for Search '{{$search}}':
      @foreach($dvds as $dvd)
        <ul>
            <li><b>{{ $dvd->title }}</b></li>
            <li>{{ $dvd->rating_name}}</li>
            <li>{{ $dvd->genre_name}}</li>
        </ul>
      @endforeach

  </body>
</html>
