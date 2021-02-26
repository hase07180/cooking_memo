@extends('layouts.app')

@section('content')

<h1>献立一覧</h1>
@foreach ($menus as $menu)
  <br>
  <h1>{{ $menu->cooking_name }}</h1>
  <img width="200px" height="150px" src="{{ $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
@endforeach

@endsection