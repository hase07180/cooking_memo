@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/menuCreate.css') }}">

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="container menuForm">
  <h1 class="menuDays">2020年2月21日（日）の献立</h1>
  <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="menuInfo">
      <div class="menuName">
        <h2>料理名</h2>
        <input class="input" type="text" name="cooking_name">
      </div>
      <div class="menuImage">
        <h2>料理名の画像</h2>
        <input class="input" type="file" name="cooking_image">
      </div>
    </div>
    <div class="icon">
      <a href="">料理を追加<i class="fas fa-plus-square"></i></a>
    </div>
    <div class="cofirm_btn">
      <input class="btn btn-secondary" type="submit" value="確認">
    </div>
  </form>
</div>

@endsection