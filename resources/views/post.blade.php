@extends('templateForm')

@section('contents')
    <h1>Hello world</h1>
    <h2>my post</h2>
    </br>
    <p>{{ $post->body }}</p>
@endsection
