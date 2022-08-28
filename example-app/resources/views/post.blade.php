@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $seluruhPostingan->title }}</h1>
    <p>
        {{-- @dd($seluruhPostingan->author->username) --}}
        By. <a href="/authors/{{ $seluruhPostingan->author->username }}"
            class="text-decoration-none">{{ $seluruhPostingan->author->name }}
        </a> in <a href="/categories/{{ $seluruhPostingan->category->slug }}"
            class="text-decoration-none">{{ $seluruhPostingan->category->name }}</a>
    </p>
    <p>{!! $seluruhPostingan->body !!}</p>
    <a href="/blog" class="text-decoration-none">Back to Blog
    @endsection
