@extends('nav2')
@extends('layout.nav')
@extends('layout.layout')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3  text-center">Gerenciar Perfil</h3>
                <form class="pr-3">

                    <div class="mb-3">
                        <p> Nome: {{ auth()->user()->name }}</p>
                    </div>
                    <div class="mb-3">
                        <p> Seguidores: </p>
                    </div>
                    <div class="mb-3">
                        <p> Seguindo: </p>
                    </div>
                    <div class="mb-3">
                        <p> Email: {{ auth()->user()->email }}</p>
                    </div>


                    <div class="d-flex justify-content-evenly">

                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Editar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
