@extends('layout.layout')

@section('content')
    @include('layout.nav')
    <div class="container p-3 mb-2 bg-dark-subtle text-dark-emphasis py-4">
        <div class="row">
            <div class="col-3">
                <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Explore</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Feed</span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-footer text-center py-2">
                        <a class="btn btn-link btn-sm" href="#">View Profile </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Idea created Successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> --}}
                <h4> Compartilhe suas memórias </h4>
                <div class="row">
                    <div class="mb-3">
                        <textarea class="form-control" id="idea" rows="3"></textarea>
                    </div>

                    <div class="">
                        <button class="btn btn-dark"> Compartilhar </button>
                    </div>
                </div>
                <hr>
                <div class="mt-3">
                    <div class="card">
                        <div class="px-3 pt-4 pb-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">

                                    <div>
                                        <h5 class="card-title mb-0"><a href="#"> Usuario
                                            </a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($memorias as $memoria)
                            <div class="card-body">
                                <p class="fs-6 fw-light text-muted">
                                    {{ $memoria->descricao }}
                                </p>
                                <div class="d-flex p-2 ">
                                    <div>
                                        <a href="#" class="fw-light nav-link fs-6"> <i class="fa-solid fa-heart"
                                                style="color: #e00606;"></i> </a>
                                    </div>
                                    <div>
                                        <a href="#" class="fw-light nav-link fs-6"><span
                                                class="fs-6 fw-light text-muted"> <i class="fa-solid fa-share"
                                                    style="color: #000000; margin-left:8px;"></i> </span></a>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <textarea class="fs-6 form-control" rows="1"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm"> Post Comment </button>
                                    </div>

                                    <hr>
                                    <div class="d-flex align-items-start">

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header pb-0 border-0">
                        <h5 class="">Search</h5>
                    </div>
                    <div class="card-body">
                        <input placeholder="...
                            " class="form-control w-100" type="text"
                            id="search">
                        <button class="btn btn-dark mt-2"> Search</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
