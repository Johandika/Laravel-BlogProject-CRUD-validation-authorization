@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Post</h1>
    {{-- <h2>{{ $seluruhPostingan->user->name }}</h2> --}}

    {{-- @foreach ($seluruhPostingan as $postingan)
        <article class="mb-4 border-bottom pb-5">
            <h2>
                @dd($postingan->user)
                {{ $postingan->category['name'] }}
                {{ $postingan->user->email }}
                {{ $postingan->category ? $postingan->category->name : 'n/a' }}

            </h2>
    @endforeach --}}


    {{-- Test ganti id jadi slug --}}
    @foreach ($seluruhPostingan as $postingan)
        <article class="mb-4 border-bottom pb-5">
            <h2>
                <a href="/posts/{{ $postingan->slug }}" class="text-decoration-none">{{ $postingan->title }}</a>
            </h2>
            <p>
                By. <a href="#" class="text-decoration-none">{{ $postingan->user->name }}</a> in <a
                    href="/categories/{{ $postingan->category->slug }}"
                    class="text-decoration-none">{{ $postingan->category->name }}</a>
            </p>
            <p>{{ $postingan->excerpt }}</p>

            <a href="/posts/{{ $postingan->id }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach

    {{-- HASIL BAGUS
    @foreach ($seluruhPostingan as $postingan)
        <article class="mb-4 border-bottom pb-5">
            <h2>
                <a href="/posts/{{ $postingan->id }}" class="text-decoration-none">{{ $postingan->title }}</a>
            </h2>
            <p>
                By. <a href="#" class="text-decoration-none">{{ $postingan->user->name }}</a> in <a
                    href="/categories/{{ $postingan->category->slug }}"
                    class="text-decoration-none">{{ $postingan->category->name }}</a>
            </p>
            <p>{{ $postingan->excerpt }}</p>

            <a href="/posts/{{ $postingan->id }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach --}}
@endsection
