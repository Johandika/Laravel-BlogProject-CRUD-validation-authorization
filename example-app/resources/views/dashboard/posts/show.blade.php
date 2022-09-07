@extends('dashboard.layouts.main')

@section('container')

<div class="container"></div>
    <div class="row my-3 justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left-circle" class="mb-1"></span> Back to All My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="mb-1"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method("delete") 
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="mb-1"></span> Delete</button>
            </form>

            {{-- GAMBAR JIKA DIISI MANUAL --}}
            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
              <img src="{{ asset("storage/" . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            @else
              {{-- GAMBAR JIKA KOSONG --}}
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            <a href="/dashboard/posts" class="text-decoration-none">Back to Dashboard
        </div>
    </div>
</div>

@endsection