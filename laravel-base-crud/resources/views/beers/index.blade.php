
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
                  <button type="submit" class="btn btn-primary">
                   <i class="far fa-eye"></i>
                  </button>
                </a>
                <a href="{{ route('beers.edit', ['beer' => $beer->id]) }}">
                  <button type="submit" class="btn btn-primary">
                   <i class="fas fa-edit"></i>
                  </button>
                </a>

                <form action="{{ route('beers.destroy', ['beer' => $beer->id]) }}" method="post">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">
                    <i class="fas fa-meteor"></i>
                  </button>


                </form>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
@endsection
