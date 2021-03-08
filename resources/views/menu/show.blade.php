@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/show.css') }}">
  <div class="container">
    <h1 class="menu-name" >料理名：{{ $menu->cooking_name }}</h1>

    <div class="material-lists">
      <div class="picture">
        <img class="menu-image" src="{{'/' . $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
      </div>
      <div class="ingredients">
      </div>
    </div>

    <div class="material-btn">
      <input class="btn btn-secondary" type="submit" value="材料を追加する">
    </div>

  </div>
@endsection