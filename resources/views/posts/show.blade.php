@extends('layouts.master')

@section('content')

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    
@endsection
