{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    @foreach ($seluruhPostingan as $postingan)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $postingan['slug'] }}">{{ $postingan['title'] }}</a>
            </h2>
            <h5>{{ $postingan['author'] }}</h5>
            <p>{{ $postingan['body'] }}</p>
        </article>
    @endforeach
@endsection
