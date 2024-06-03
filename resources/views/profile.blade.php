@extends('nav2')
@extends('layout.nav')
@extends('layout.layout')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3  text-center">Informações da Conta</h3>
                <form class="pr-3">
                    <div class="d-flex justify-content-center ">
                        <img style="width:80px; height:80px; border-radius: 50%;" class="my-3 "
                            src="{{ asset('/' . Auth::user()->avatar) }}" alt="user">
                    </div>
                    <div class="mb-3">
                        <p> Nome: {{ auth()->user()->name }}</p>
                    </div>
                    <div class="mb-3">
                        <p> Seguidores: {{ auth()->user()->followers->count() }} </p>
                    </div>
                    <div class="mb-3">
                        <p> Seguindo: {{ auth()->user()->followings->count() }} </p>
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
