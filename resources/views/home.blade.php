@extends('layouts/main')

@section('container')
    <h1>Halaman Home</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200px">
@endsection

