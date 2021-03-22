@extends('base')

@section('title', 'Create')

@section('content')

  @include('beers.form', ['edit' => false])

@endsection
