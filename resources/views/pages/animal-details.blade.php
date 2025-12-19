@extends('layouts.app')
@section('title', 'Animal')
@section('content')
    <x-animal :name="$animal['name']" :species="$animal['species']" :age="$animal['age']" :desc="$animal['desc']" :image="$animal['photo']"/>
@endsection