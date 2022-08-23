{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    @foreach ($seluruhPostingan as $postingan)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $postingan->id }}">{{ $postingan->title }}</a>
            </h2>
            <p>{{ $postingan->excerpt }}</p>
        </article>
    @endforeach
@endsection
