@extends('layouts.app', ['pageTitle' => 'Contact'])
@section('content')
    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::email('email', null, [
        'class' => 'form-control',
        'placeholder' => 'Email du destinataire'
        ]) !!}
    </div>
    <div class="form-group">
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom de l\'article'
        ]) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('content', null, [
        'class' => 'form-control',
        'placeholder' => 'Message'
        ]) !!}
    </div>
    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}
@endsection