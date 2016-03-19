@if($action == 'edit')
    {!! Form::model($post, ['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}
@else
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST']) !!}
@endif
    {{-- <div class="form-group">
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div> --}}

    <div class="form-group">
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom de l\'article'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="text-center">
        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}