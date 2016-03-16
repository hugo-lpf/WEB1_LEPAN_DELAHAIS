@extends('layouts.app')

@section('content')
    <h1>Edit de l'article n'° {{ $post->id }}</h1>

    @include('partials.articles.form', ['action' => 'edit'])
    @include('partials.articles.errors')

@endsection