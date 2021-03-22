@extends('base')

@section('title', 'Edit')

@section('content')


  @include('beers.form', ['edit' => true])

@endsection
