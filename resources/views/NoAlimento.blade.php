@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        @include('shared.success-message')
        <div class="row">
            <div class="card text-center bg-light col">

                <h4 class="p-5"> Nenhum alimento foi cadastrado. Cadastre <a href={{ route('alimento.createView') }}>
                        aqui</a>!
                </h4>
            </div>
        </div>
    </div>
@endsection
