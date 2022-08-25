@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $seluruhPostingan->title }}</h1>
    <p>
        By. Johandika Lubis in <a
            href="/categories/{{ $seluruhPostingan->category->slug }}">{{ $seluruhPostingan->category->name }}</a>
    </p>
    <p>{!! $seluruhPostingan->body !!}</p>
    <a href="/blog">Back to Blog
    @endsection
