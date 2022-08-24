@extends('layouts.main')

@section('container')
    {{-- <article>
        <h2>{{ $seluruhPostingan->title }} </h2>
        <h5>{{ $seluruhPostingan->author }}</h5>
        <p>
            {!! $seluruhPostingan->body !!}
        </p>
    </article>
    <a href="/blog">Back to Blog</a> --}}

    <h1 class="mb-5">{{ $seluruhPostingan->title }}</h1>

    <p>
        Kategori : <a href="/categories/{{ $seluruhPostingan->category->slug }}">{{ $seluruhPostingan->category->name }}</a>
    </p>

    {!! $seluruhPostingan->body !!}

    <a href="/blog">Back to Blog</a>
@endsection
