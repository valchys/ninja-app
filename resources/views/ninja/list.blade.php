@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@if(session('success'))
<div class="alert alert-danger">
 {{ session('success') }}
</div>
@endif
<div class="row">
  @foreach ($viewData["ninjas"] as $ninja)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
      <div class="card-body text-center">
      <p class="card-text fw-bold">{{ $ninja->getName() }}</p>
          <p class="card-text">ID: {{ $ninja->getId() }}</p>
          <p class="card-text">Hidden in the {{ $ninja->getVillage() }}</p>
          @if($ninja->getVillage()=='leaf')
          <p class="card-text"style="color: red">{{ $ninja->getChakra() }}</p>
          @else
          <p class="card-text"style="color: blue">{{ $ninja->getChakra() }}</p>
          @endif
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
