@extends('dashboard.layouts.main')

@section('container')

<div class="container"></div>
    <div class="row my-3 justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left-circle" class="mb-1"></span> Back to All My Posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit" class="mb-1"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle" class="mb-1"></span> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid mt-3">
            
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="text-decoration-none">Back to Blog
        </div>
    </div>
</div>

@endsection