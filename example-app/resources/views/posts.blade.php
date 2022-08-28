@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $titles }}</h1>

    @foreach ($seluruhPostingan as $postingan)
        <article class="mb-4 border-bottom pb-5">
            <h2>

                <a href="/posts/{{ $postingan->slug }}" class="text-decoration-none">{{ $postingan->title }}</a>
            </h2>
            <p>
                By. <a href="/authors/{{ $postingan->author->username }}"
                    class="text-decoration-none">{{ $postingan->author->name }}</a> in <a
                    href="/categories/{{ $postingan->category->slug }}"
                    class="text-decoration-none">{{ $postingan->category->name }}</a>
            </p>
            <p>{{ $postingan->excerpt }}</p>

            <a href="/posts/{{ $postingan->slug }}" class="text-decoration-none">Read more..</a>
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
