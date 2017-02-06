<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search {{ $search }}</title>
  </head>
  <body>

    <br>

    <ul>
      Interests:
      @foreach($dvds as $dvd)
        <li>{{ $dvd->title }}</li>
      @endforeach
    </ul>
  </body>
</html>
