@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
    <article class="mb-5">
        <h2>{{ $post['title'] }}</h2>
        <h5>By : {{ $post['author'] }}</h5>
        <p>{{ $post['content'] }}</p>
    </article>
@endforeach
    
@endsection