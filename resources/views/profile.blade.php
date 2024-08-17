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
                        <img style="width: auto; height: 150px;" class="me-2 mt-4"
                            src="{{ Storage::url('' . Auth::user()->avatar) }}" alt="User Avatar">



                    </div>
                    <div class="mb-3">
                        <p> Nome: {{ auth()->user()->name }}</p>
                    </div>
                    <div>
                        <div class="mb-3">

                            <p>Seguidores: <a href="#!" type="button" data-bs-toggle="modal"
                                    data-bs-target="#seguidoresModal"><strong>
                                        {{ auth()->user()->followers->count() }} </strong></p></a>



                            <div class="modal " id="seguidoresModal" tabindex="-1" aria-labelledby="contactModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="contactModalLabel">Seguidores</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @foreach (auth()->user()->followers as $followers)
                                                <div class="d-flex align-items-center">
                                                    <span class="me-3">
                                                        <img style="width:50px; height:50px; border-radius: 50%;"
                                                            class="my-3"
                                                            src="{{ asset('/storage/' . $followers->avatar) }}"
                                                            alt="follower">
                                                    </span>
                                                    <span>
                                                        <strong>
                                                            <p>{{ $followers->name }}</p>
                                                        </strong>
                                                    </span>

                                                </div>
                                            @endforeach



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Seguindo: <a href="#!" type="button" data-bs-toggle="modal"
                                data-bs-target="#seguindoModal"><strong>
                                    {{ auth()->user()->followings->count() }} </strong></p></a>

                        <div class="modal " id="seguindoModal" tabindex="-1" aria-labelledby="contactModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="contactModalLabel">Seguindo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach (auth()->user()->followings as $followings)
                                            <div class="d-flex align-items-center">
                                                <span class="me-3">
                                                    <img style="width:50px; height:50px; border-radius: 50%;" class="my-3"
                                                        src="{{ asset('/storage/' . $followings->avatar) }}" alt="follower">
                                                </span>
                                                <span>
                                                    <strong>
                                                        <p>{{ $followings->name }}</p>
                                                    </strong>
                                                </span>

                                            </div>
                                        @endforeach



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="mb-3">
                        <p> Email: {{ auth()->user()->email }}</p>
                    </div>


                    <div class="d-flex justify-content-evenly">

                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Editar</a>

                        <a href="{{ route('dashboard') }}" class="btn btn-success">Voltar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
