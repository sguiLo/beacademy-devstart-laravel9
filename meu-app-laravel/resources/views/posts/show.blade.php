@extends('template.users')
@section('title', "Listagem de Postagens do {$user->name}")
@section('body')
            <style>
                textarea {
                    resize: none;
                }
            </style>
    <h1>Postagens do {{$user->name}}</h1>
    @foreach($posts as $post)
        <div class="mb-3">
            <label class="form-label">Identificação Nº:<br><b>{{ $post->id }}</b></label>
                <br>
            <label class="form-label">Status:<br><b>{{ $post->active?'Ativo':'Inativo' }}</b></label>
                <br>
            <label class="form-label">Título:<br><b>{{ $post->title }}</b></label>
                <br>
            <label class="form-label">Postagem:<br></label>
                <br>
            <textarea class="form-control" rows="3" readonly>{{ $post->post }}</textarea>
        </div>
    @endforeach
@endsection