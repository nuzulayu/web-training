@extends('layouts.main')
@section('container')
    <h2>{{ $posts->title }}</h2>
    <p>by <a href="/authors/{{ $posts->user->username }}">{{ $posts->user->name }}</a> in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
    {{-- {{ $posts->body }}     --}}
    {!! $posts->body !!}
@endsection