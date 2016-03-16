@extends('layouts.app')

@section('content')
    <h1>Ajouter un article</h1>

    @include('partials.articles.form', ['action' => 'create'])
    @include('partials.articles.errors')

@endsection