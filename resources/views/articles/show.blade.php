@extends('layouts.app', ['pageTitle' => 'Article n°{{ $post->id }}'])

@section('content')
    <h1>Article n°{{ $post->id }}</h1>
    <h2>{{$post->title}} <br> Auteur: {{ $post->user->name }} </h2>
    <p>{{$post->content}}</p>

@endsection