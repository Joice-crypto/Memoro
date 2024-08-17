@extends('layout.layout')
@section('content')
    <x-app-layout>

        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <div class="container p-3 mb-2 text-dark-emphasis py-4">

            <div class="row">
                <div class="col-3">
                    @include('shared.search')
                </div>

                <div class="col-6">
                    <div class="row">
                        <h4>Compartilhe suas memórias ou alimentos</h4>
                        <div style="background-color: white; height:4rem" id="toolbar">

                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-image"></button>
                            <button class="ql-header" value="2"></button>
                            <button style="margin-right: 50px;" id="add-memoria">Adicionar Memoria</button>
                            <button style="margin-right: 50px;" id="add-alimento">Adicionar Alimento</button>
                        </div>

                        <div id="editor" style="height: 150px; background-color: white"></div>
                        <div class="">
                            <button id="submit" class="btn btn-dark">Compartilhar</button>
                        </div>
                    </div>
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
        <div class="modal fade" id="foodModal" tabindex="-1" aria-labelledby="foodModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="foodModalLabel">Adicionar Alimento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="foodModalBody">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de Memória -->
        <div class="modal fade" id="memoriaModal" tabindex="-1" aria-labelledby="memoriaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="memoriaModalLabel">Adicionar Memória</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="memoriaModalBody">
                        <!-- Conteúdo carregado via AJAX -->
                    </div>
                </div>
            </div>
        </div>



        <script>
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: '#toolbar'
                }
            });
            const foodNewUrl = @json(route('alimento.createView'));
            document.getElementById('add-alimento').addEventListener('click', function() {
                fetch(foodNewUrl) // URL para carregar o conteúdo de alimento
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('foodModalBody').innerHTML = html;
                        var myModal = new bootstrap.Modal(document.getElementById('foodModal'));
                        myModal.show();
                    });
            });
            const memoriaNewUrl = @json(route('memoria.new'));
            document.getElementById('add-memoria').addEventListener('click', function() {
                fetch(memoriaNewUrl) // Use a variável definida no Blade
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('memoriaModalBody').innerHTML = html;
                        var myModalMem = new bootstrap.Modal(document.getElementById('memoriaModal'));
                        myModalMem.show();
                    })
                    .catch(error => console.error('Error:', error)); // Adicione tratamento de erro
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </x-app-layout>
@endsection
