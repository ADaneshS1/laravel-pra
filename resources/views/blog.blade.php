@extends('layout.main')
@section('contain')
<h1>Halaman Blog</h1>
    @foreach($posts as $post)
    <article mb-3>
        <h2><a href="post/{{ $post['slug'] }}">{{ $post['judul']}}</a></h2>
        <h2>{{ $post['penulis'] }}</h2>
        <h2>{{ $post['post'] }}</h2>
    </article>
    @endforeach
@endsection