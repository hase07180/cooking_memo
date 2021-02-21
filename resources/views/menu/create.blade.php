@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/menuCreate.css') }}">

<div class="container menuForm">
  <h1 class="menuDays">2020年2月21日（日）の献立</h1>
  <div class="menuInfo">
    <div class="menuName">
      <h2>料理名</h2>
      <input class="input" type="text">
    </div>
    <div class="menuImage">
      <h2>料理名の画像</h2>
      <input class="input" type="file">
    </div>
  </div>
  <div class="icon">
    <a href="">料理を追加<i class="fas fa-plus-square"></i></a>
  </div>
  <div class="cofirm_btn">
    <input class="btn btn-secondary" type="submit" value="確認">
  </div>
</div>

@endsection