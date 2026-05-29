@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Tela de produtos</h1>

@if($search)
    <p>O usuário está buscando por: {{ $search }}</p>
@endif

<a href="/">Voltar para home</a>

@endsection