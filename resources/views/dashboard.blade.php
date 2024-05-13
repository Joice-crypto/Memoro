@extends('layout.layout')
@section('content')
    <x-app-layout>

        <div class="container p-3 mb-2 bg-dark-subtle text-dark-emphasis py-4">
            <div class="row">
                <div class="col-3">
                    @include('shared.search')
                </div>
                <div class="col-6">

                    @include('shared.share-memorias')
                    <hr>
                    <div class="mt-3">
                        <div class="card">
                            <div class="px-3 pt-4 pb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">

                                        @foreach ($memoriasComp as $memoriaComp)
                                            @if ($memoriaComp->memoria)
                                                <div>
                                                    <h5 class="card-title text-black  mb-0"><a href="#">
                                                            {{ $memoriaComp->user->name }}
                                                        </a></h5>
                                                </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="fs-6 fw-light text-muted">
                                    {{ $memoriaComp->memoria->titulo }}
                                </p>
                                <p class="fs-6 fw-light text-muted">
                                    {{ $memoriaComp->memoria->descricao }}
                                </p>
                                <div class="d-flex p-2 ">
                                    <div>
                                        <a href="#" class="fw-light nav-link fs-6"> <i class="fa-solid fa-heart"
                                                style="color: #e00606;"></i> </a>
                                    </div>

                                </div>
                                @include('shared.comments-box')
                            </div>
                            @endif
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>
        {{ $memoriasComp->links() }}
        </div>

    </x-app-layout>
@endsection
