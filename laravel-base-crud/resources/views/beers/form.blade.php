@php
  // edit
  if(isset($edit) && !empty($edit)) {
    $method = 'PUT';
    $url = route('beers.update', compact('beer'));
  } else {
    // create
    $method = 'POST';
    $url = route('beers.store');
  }

@endphp


<form action="{{ $url }}" method="post">
  @csrf
  @method($method)

  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" placeholder="Title" value="{{isset($beer) ? $beer->title : '' }}">
    <div class="invalid-feedback">
      {{ $errors->first('title') }}
    </div>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" placeholder="Description" value="{{isset($beer) ? $beer->description : '' }}">
    <div class="invalid-feedback">
      {{ $errors->first('description') }}
    </div>
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" placeholder="Price" value="{{isset($beer) ? $beer->price : '' }}">
    <div class="invalid-feedback">
      {{ $errors->first('price') }}
    </div>
  </div>

  <div class="form-group">
    <label for="cover">Cover</label>
    <input class="form-control" type="text" name="cover" placeholder="Cover Url" value="{{isset($beer) ? $beer->cover : '' }}">
  </div>

  <input type="submit" value="Invia">
</form>
