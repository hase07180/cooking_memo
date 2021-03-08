@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/show.css') }}">
  <div class="container details-page">
    <h1 class="menu-name" >料理名：{{ $menu->cooking_name }}</h1>

    <div class="material-lists">
      <div class="picture">
        <img class="menu-image" src="{{'/' . $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
      </div>
      <div class="ingredients">
        <h3>材料</h3>
        <ul>
          <li>〇〇</li>
          <li>〇〇</li>
          <li>〇〇</li>
          <li>〇〇</li>
          <li>〇〇</li>
        </ul>
      </div>
    </div>

    <div class="material-btn">
      <input class="btn btn-secondary" type="submit" value="材料を追加する">
    </div>

  </div>
@endsection