<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beer shop</title>

    </head>


    <body>

      <h1>BEER SHOP</h1>

      @foreach ($beers as $beer)
        <p>{{$beer->title}}</p>
      @endforeach


    </body>
</html>
