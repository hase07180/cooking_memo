@extends('layouts.app')

@section('content')

<div class="container">
  <h1>献立一覧</h1>
  <br>
  <div class="menu-lists">
    @foreach ($menus as $menu)
    <div class="menu">
      <h2 class="menu-name">料理名：{{ $menu->cooking_name }}</h2>
      <img class="menu-image" src="{{ $menu->cooking_image }}" alt="{{ $menu->cooking_name }}" width="200px" height="150px">
    </div>
    @endforeach
  </div>
  <div class="shopping-lists">

  </div>
</div>

@endsection