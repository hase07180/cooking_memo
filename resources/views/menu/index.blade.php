@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">

<div class="container menu-page">
  <h1 class="menu-day">{{ \Carbon\Carbon::now()->format("Y/m/d") }}の献立</h1>
  {{-- <h1>{{ $today }}</h1> --}}
  <br>
  <div class="menu-lists row">
    @foreach ($menus as $menu)
    <div class="card menu-card" style="width: 18rem;">
      <a href="{{ route('menu.show', $menu->id) }}">
        <div class="menu">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"><img class="menu-image" src="{{ $menu->cooking_image }}" alt="{{ $menu->cooking_name }}"></text></svg>
          <div class="card-body">
            <p class="card-text">{{ $menu->cooking_name }}</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="shopping-lists">

  </div>
</div>

@endsection