@extends('layout.layout')
@section('content')
    <x-app-layout>

        <div class="container p-3 mb-2 text-dark-emphasis py-4">
            <div class="row">
                <div class="col-3">
                    @include('shared.search')
                </div>

                <div class="col-6">
                    <hr>
                    <div class="mt-3">
                        <div class="card">
                            <div class="px-3 pt-4 pb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        @forelse ($memoriasComp as $memoriaComp)
                                            @if ($memoriaComp->memoria)
                                                <div>
                                                    <h5 class="card-title text-black mb-0">
                                                        <a href="#">
                                                            {{ $memoriaComp->user->name }}
                                                        </a>
                                                    </h5>
                                                </div>
                                            @endif
                                        @empty
                                            <div class="alert alert-info" role="alert">
                                                <h4>Não existem memorias compartilhadas</h4>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            @foreach ($memoriasComp as $memoriaComp)
                                @if ($memoriaComp->memoria)
                                    <div class="card-body">
                                        <p class="fw-light text-muted">
                                            {{ $memoriaComp->memoria->titulo }}
                                        </p>
                                        <p class="fs-6 fw-light text-muted">
                                            {{ $memoriaComp->memoria->descricao }}
                                        </p>
                                        <img src="{{ asset('storage/' . $memoriaComp->memoria->imagem) }}" alt="profile Pic"
                                            height="100" width="120">
                                        <div class="d-flex p-2 mt-3">
                                            @include('shared.like-button')
                                        </div>
                                        @include('shared.comments-box')
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    @include('shared.who-follow')
                </div>
            </div>
        </div>

        {{ $memoriasComp->links() }}

    </x-app-layout>
@endsection
