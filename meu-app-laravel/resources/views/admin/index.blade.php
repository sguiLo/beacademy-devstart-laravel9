@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<div class="d-flex justify-content-center mt-4">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/dashboard.jfif') }}" class="card-img-top" alt="Dash">
        <div class="card-body">
            <h5 class="card-title">Bem Vindo ao Dashboard</h5>
            <p class="card-text">#pay.livre #be.academy #laravel</p>

        </div>
    </div>
</div>

@endsection