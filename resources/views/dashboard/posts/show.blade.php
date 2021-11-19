@extends('dashboard.layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>
    <a href="" class="btn btn-warning">Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-danger border-0" onclick="return confirm('are you sure wanna delete this post?')"> Delete</button>
    </form>
<p>by <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    
@endsection