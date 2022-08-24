{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach ($seluruhPostingan as $postingan)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $postingan->slug }}">{{ $postingan->title }}</a>
            </h2>
            <p>{{ $postingan->excerpt }}</p>
        </article>
    @endforeach
@endsection
