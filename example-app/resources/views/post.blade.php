@extends('layouts.main')

@section('container')

<div class="container"></div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $seluruhPostingan->title }}</h1>
            <p>
                {{-- @dd($seluruhPostingan->author->username) --}}
                By. <a href="/blog?author={{ $seluruhPostingan->author->username }}"
                    class="text-decoration-none">{{ $seluruhPostingan->author->name }}
                </a> in <a href="/blog?category={{ $seluruhPostingan->category->slug }}"
                    class="text-decoration-none">{{ $seluruhPostingan->category->name }}</a>
            </p>

            {{-- GAMBAR JIKA DIISI MANUAL --}}
            @if ($seluruhPostingan->image)
            <div style="max-height: 350px; overflow: hidden;">
              <img src="{{ asset("storage/" . $seluruhPostingan->image) }}" alt="{{ $seluruhPostingan->category->name }}" class="img-fluid">
            </div>
            @else
            {{-- GAMBAR JIKA KOSONG --}}
            <img src="https://source.unsplash.com/1200x400?{{ $seluruhPostingan->category->name }}" alt="https://source.unsplash.com/500x400?{{ $seluruhPostingan->category->name }}" class="img-fluid">
            @endif

            
            
            <article class="my-3 fs-6">
                {!! $seluruhPostingan->body !!}
            </article>

            <a href="/blog" class="text-decoration-none">Back to Blog
        </div>
    </div>
</div>

@endsection
