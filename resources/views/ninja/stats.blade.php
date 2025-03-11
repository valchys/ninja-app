@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<h3>Ninjas per Village</h3>
<ul>
    
    @foreach ($viewData["ninjasByVillage"] as $village => $count)
        <li>{{ ucfirst($village) }}: {{ $count }} ninjas</li>
    @endforeach
</ul>

<h3>Accumulated Chakra</h3>
<p><strong>{{ $viewData["totalChakra"] }}</strong></p>

@endsection
