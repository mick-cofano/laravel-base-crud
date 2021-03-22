@extends('base')

@section('title', 'Show')

@section('content')

    <form action="{{route('beers.store')}}" method="post">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" placeholder="Title">
        <div class="invalid-feedback">
          {{ $errors->first('title') }}
        </div>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" placeholder="Description">
        <div class="invalid-feedback">
          {{ $errors->first('description') }}
        </div>
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" placeholder="Price">
        <div class="invalid-feedback">
          {{ $errors->first('price') }}
        </div>
      </div>

      <div class="form-group">
        <label for="cover">Cover</label>
        <input class="form-control" type="text" name="cover" placeholder="Cover Url">
      </div>

      <input type="submit" value="Invia">
    </form>

@endsection
