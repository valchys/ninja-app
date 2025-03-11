@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Register a New Ninja</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            <form method="POST" action="{{ route('ninja.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" required/>
              <select class="form-control mb-2" name="village">
                <option value="" disabled selected>-- Select a village --</option>
                <option value="leaf" {{ old('type') == 'leaf' ? 'selected' : '' }}>Leaf</option>
                <option value="mist" {{ old('type') == 'mist' ? 'selected' : '' }}>Mist</option>
              </select>
              <input type="text" class="form-control mb-2" placeholder="Enter chakra" name="chakra" value="{{ old('chakra') }}" required/>
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
