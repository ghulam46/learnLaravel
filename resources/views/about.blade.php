@extends('layouts.main')

@section('container')
    <h1>INI HALAMAN ABOUT</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="ghulam" width="200" class="img-thumbnail rounded-circle">
@endsection