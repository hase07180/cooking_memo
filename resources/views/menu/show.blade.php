@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/show.css') }}">
  <div class="container">
    <h1>{{ $menu->cooking_name }}</h1>
    <img class="menu-image" src="{{'/' . $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
  </div>
@endsection