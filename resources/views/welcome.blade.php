@extends('layouts.app')
@section('title' , 'Accueil')
@section('content')
    @foreach ($animals as $animal)
    @if ($loop->last)
        @break
    @endif
    <a href="{{ route('animal.show', ['id' => $animal['id']]) }}">
        <x-animal :name="$animal['name']" :species="$animal['species']" :age="$animal['age']" :desc="$animal['desc']" :image="$animal['photo']"/>
    </a>
    @endforeach
@endsection