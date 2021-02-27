@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">

<div class="container menu-page">
  <h1>{{ \Carbon\Carbon::now()->format("Y/m/d") }}の献立</h1>
  {{-- <h1>{{ $today }}</h1> --}}
  <br>
  <div class="menu-lists">
    @foreach ($menus as $menu)
    <div class="menu-card">
      <a href="#">
        <div class="menu">
          <h2 class="menu-name">料理名：{{ $menu->cooking_name }}</h2>
          <img class="menu-image" src="{{ $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="shopping-lists">

  </div>
</div>

@endsection