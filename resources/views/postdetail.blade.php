@extends('layout.main')
@section('contain')
    <h1>{{ $post['judul'] }}</h1>
    <p>{{ $post['penulis'] }}</p>
    <p>{{ $post['post'] }}</p>
    <a href="/blog" mt-4>Kembali ke blog</a>
@endsection