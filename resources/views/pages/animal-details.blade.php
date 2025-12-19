@extends('layouts.app')
@section('title', 'Animal')
@section('content')
    <h1>{{ $animal->name }}</h1>
    <p>{{ $animal->species }}</p>
    <p>{{ $animal->age }}</p>
    <p>{{ $animal->desc }}</p>
    <img rel="icon" type="image/png" alt="{{ $animal->species }}" src="{{ asset('images/' . $animal->photo) }}">
@endsection