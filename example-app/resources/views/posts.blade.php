@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $titles }}</h1>

@if ($seluruhPostingan->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $seluruhPostingan[0]->category->name }}-proffesional" class="card-img-top" alt="{{ $seluruhPostingan[0]->category->name }}">
    <div class="card-body text-center">
        <h5 class="card-title "><a href="/posts/{{ $seluruhPostingan[0]->slug }}" class="text-decoration-none text-dark">{{ $seluruhPostingan[0]->title }}</a>
        </h5>
        <p>
            <small>

                By. <a href="/authors/{{ $seluruhPostingan[0]->author->username }}" class="text-decoration-none">{{ $seluruhPostingan[0]->author->name }}</a> in <a href="/categories/{{ $seluruhPostingan[0]->category->slug }}" class="text-decoration-none">{{ $seluruhPostingan[0]->category->name }}</a>
                {{ $seluruhPostingan[0]->created_at->diffForHumans() }}

            </small>
        </p>
        <p class="card-text">{{ $seluruhPostingan[0]->excerpt }}</p>
        <a href="/posts/{{ $seluruhPostingan[0]->slug }}" class="text-decoration-none btn btn-primary">Read
            more..</a>
    </div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="text-center fs-4container">
    <div class="row">

        @foreach($seluruhPostingan->skip(1) as $postingan)
        {{-- @dd($postingan->category->name) --}}
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.71)"> <a href="/categories/{{ $postingan->category->slug }}" class=" text-white text-decoration-none"> {{ $postingan->category->name }}</a>
                </div>
                     <img src="https://source.unsplash.com/500x400?{{ $postingan->category->name }}" class="card-img-top" alt="{{ $postingan->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $postingan->title }}</h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/authors/{{ $postingan->author->username }}" class="text-decoration-none">{{ $postingan->author->name }}</a> in <a href="/categories/{{ $postingan->category->slug }}" class="text-decoration-none">{{ $postingan->category->name }}</a>
                            {{ $postingan->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $postingan->excerpt }}</p>
                    <a href="/posts/{{ $postingan->slug }}" class="btn btn-primary">Read more..</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

{{-- @foreach ($seluruhPostingan->skip(1) as $postingan)
<article class="mb-4 border-bottom pb-5">
    <h2>

        <a href="/posts/{{ $postingan->slug }}" class="text-decoration-none">{{ $postingan->title }}</a>
    </h2>
    <p>
        By. <a href="/authors/{{ $postingan->author->username }}" class="text-decoration-none">{{ $postingan->author->name }}</a> in <a href="/categories/{{ $postingan->category->slug }}" class="text-decoration-none">{{ $postingan->category->name }}</a>
    </p>
    <p>{{ $postingan->excerpt }}</p>

    <a href="/posts/{{ $postingan->slug }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach --}}
@endsection