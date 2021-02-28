@extends('layouts.app')

@section('content')
{{-- <form method="GET" action=""> --}}
  {{-- @csrf --}}
  <h1>{{ $menu->cooking_name }}</h1>
  <img class="menu-image" src="{{ $menu->cooking_image }}" alt="{{ $menu->cooking_name }}">
{{-- </form> --}}
@endsection