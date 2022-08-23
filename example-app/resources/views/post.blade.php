@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $seluruhPostingan['title'] }} </h2>
        <h5>{{ $seluruhPostingan['author'] }}</h5>
        <p>
            {{ $seluruhPostingan['body'] }}
        </p>
    </article>
    <a href="/blog">Back to Blog</a>
@endsection
