@extends('layouts.main')

{{-- Titles dan Form Input --}}
@section('container')
<h1 class="mb-3 text-center">{{ $titles }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            @if(request("category"))
                <input type="hidden" name="category" value="{{ request("category") }}">
            @endif
            @if(request("author"))
                <input type="hidden" name="author" value="{{ request("author") }}">
            @endif
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Search.."
                    name="search"
                    value="{{ request("search") }}"
                >
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($seluruhPostingan->count())
<div class="card mb-3">
    <img
        src="https://source.unsplash.com/1200x400?{{ $seluruhPostingan[0]->category->name }}-proffesional"
        class="card-img-top"
        alt="{{ $seluruhPostingan[0]->category->name }}"
    />
    <div class="card-body text-center">
        <h5 class="card-title">
            <a
                href="/posts/{{ $seluruhPostingan[0]->slug }}"
                class="text-decoration-none text-dark"
                >{{ $seluruhPostingan[0]->title }}</a
            >
        </h5>
        <p>
            <small>
                By.
                <a
                    href="/blog?author={{ $seluruhPostingan[0]->author->username }}"
                    class="text-decoration-none"
                    >{{ $seluruhPostingan[0]->author->name }}</a
                >
                in
                <a
                    href="/blog?category={{ $seluruhPostingan[0]->category->slug }}"
                    class="text-decoration-none"
                    >{{ $seluruhPostingan[0]->category->name }}</a
                >
                {{ $seluruhPostingan[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $seluruhPostingan[0]->excerpt }}</p>
        <a
            href="/posts/{{ $seluruhPostingan[0]->slug }}"
            class="text-decoration-none btn btn-primary"
            >Read more..</a
        >
    </div>
</div>

{{-- Postingan Row Mini --}}
<div class="text-center fs-4container">
    <div class="row">
        @foreach($seluruhPostingan->skip(1) as $postingan)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div
                    class="position-absolute px-3 py-2"
                    style="background-color: rgba(0, 0, 0, 0.71)"
                >
                    <a
                        href="/blog?category={{ $postingan->category->slug }}"
                        class="text-white text-decoration-none"
                    >
                        {{ $postingan->category->name }}</a
                    >
                </div>
                <img
                    src="https://source.unsplash.com/500x400?{{ $postingan->category->name }}"
                    class="card-img-top"
                    alt="{{ $postingan->category->name }}"
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $postingan->title }}</h5>
                    <p>
                        <small class="text-muted">
                            By.
                            <a
                                href="/blog?author={{ $postingan->author->username }}"
                                class="text-decoration-none"
                                >{{ $postingan->author->name }}</a
                            >
                            in
                            <a
                                href="/blog?category={{ $postingan->category->slug }}"
                                class="text-decoration-none"
                                >{{ $postingan->category->name }}</a
                            >
                            {{ $postingan->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $postingan->excerpt }}</p>
                    <a
                        href="/posts/{{ $postingan->slug }}"
                        class="btn btn-primary"
                        >Read more..</a
                    >
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center mb-3">
    {{ $seluruhPostingan->links() }}
</div>


@endsection
