@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/show.css') }}">
  <div class="container details-page">
    <h1 class="menu-name" >料理名：{{ $menu->cooking_name }}</h1>

    <div class="material-lists row">
      <div class="picture col-lg-6  col-12 my-3">
        <img class="menu-image" src="{{'/' . $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
      </div>
      <div class="ingredients col-lg-6  col-12 my-3">
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
      <a href="{{ route('food.create') }}"><input class="btn btn-secondary" type="submit" value="材料を追加する"></a>
    </div>

  </div>
@endsection