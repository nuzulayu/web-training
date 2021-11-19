
@extends('layouts/main')

@section('container')
    <h1>Halaman Categories</h1>
    
    @foreach ($categories as $category)
    <ul>
        <li>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
    </ul>
  
        {{-- <article class="mb-5">
            <h2>
                <a href="/blog/{{ $post->slug}}">{{ $post->title }}</a></h2>
                <p>by <a href="#"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article> --}}
    @endforeach
{{-- <script src="js/script.js"></script> --}}
@endsection
