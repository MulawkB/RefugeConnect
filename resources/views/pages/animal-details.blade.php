@extends('layouts.app')
@section('title', 'Animal')
@section('content')
    <h1>{{ $animal->name }}</h1>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>{{ $animal->desc }}</p>
    <img rel="icon" type="image/png" alt="{{ $animal->species }}" src="{{ asset('images/' . $animal->photo) }}">
@endsection