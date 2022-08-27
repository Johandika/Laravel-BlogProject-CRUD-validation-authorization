@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $seluruhPostingan->title }}</h1>
    <p>

        By. <a href="#" class="text-decoration-none">{{ $seluruhPostingan->user->name }} </a> in <a
            href="/categories/{{ $seluruhPostingan->category->slug }}"
            class="text-decoration-none">{{ $seluruhPostingan->category->name }}</a>
    </p>
    <p>{!! $seluruhPostingan->body !!}</p>
    <a href="/blog" class="text-decoration-none">Back to Blog
    @endsection
