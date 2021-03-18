<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beer shop</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    </head>


    <body>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Cover</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($beers as $beer)
            <tr>
              <th scope="row">{{ $beer->id }}</th>
              <td>{{ $beer->title }}</td>
              <td>{{ $beer->description }}</td>
              <td>{{ $beer->price }}</td>
              <td><img src="{{ $beer->cover }}" width="150" /></td>
            </tr>
          @endforeach

        </tbody>
      </table>

    </body>
</html>
