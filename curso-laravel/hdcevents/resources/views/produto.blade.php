@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if($id)
    <h1>Exibindo produto id: {{ $id }}</h1>
@endif

<a href="/">Voltar para home</a>

@endsection