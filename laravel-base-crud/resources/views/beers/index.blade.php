
@extends('base')

@section ('title', 'Index')

@section ('content')

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Cover</th>
            <th scope="col">action</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($beers as $beer)
            <tr>
              <th scope="row">{{ $beer->id }}</th>
              <td><a href="{{ route('beers.show', ['beer' => $beer->id]) }}">{{ $beer->title }}</a></td>
              <td>{{ $beer->description }}</td>
              <td>{{ $beer->price }}</td>
              <td><img src="{{ $beer->cover }}" width="150" /></td>
              <td>
                <a href="{{ route('beers.show', ['beer' => $beer->id]) }}">
                   <i class="far fa-eye"></i>
                </a>
                <a href="{{ route('beers.edit', ['beer' => $beer->id]) }}">
                   <i class="fas fa-edit"></i>
                </a>
                <i class="fas fa-meteor"></i>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
@endsection
