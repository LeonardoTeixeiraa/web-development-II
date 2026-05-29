@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>

<img src="{{ asset('img/banner.jpeg') }}" alt="Banner" style="width: 100%; height: 400px; object-fit: cover;">

@foreach ($events as $event)
    <div>
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
    </div>
@endforeach

@endsection