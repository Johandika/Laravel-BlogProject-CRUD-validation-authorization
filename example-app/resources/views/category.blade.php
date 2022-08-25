{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category :{{ $category }}</h1>

    @foreach ($seluruhPostingan as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
