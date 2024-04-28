@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">

                @if ($editing ?? false)
                    <h3 class="mt-3 text-center"> Memoria {{ $id->titulo }}</h3>
                    <form action="{{ route('memoria.update', $id->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Titulo</label>
                            <input type="text" name="titulo" value="{{ $id->titulo }}" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Descrição</label>
                            <input type="text" name="descricao" value="{{ $id->descricao }}" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Alimento</label>
                            <select name="alimento_id" class="form-select form-select-sm mb-3"
                                aria-label="Large select example">

                                @php
                                    $alimento = \App\Models\Alimento::find($id->alimento_id);
                                @endphp
                                <option value="{{ $id->alimento_id }}" selected>
                                    {{ $alimento ? $alimento->nome : 'Alimento não encontrado' }}</option>
                            </select>

                        </div>
                        <label for="nomeProduto" class="form-label">Imagem</label>
                        <div class="mb-3">

                            @if ($id->imagem)
                                <img src="{{ asset('storage/' . $id->imagem) }}" alt="Imagem" width="100">
                            @else
                                <p>Nenhuma imagem selecionada</p>
                            @endif
                            <div class="mb-3">
                                <input type="file" name="imagem" aria-describedby="emailHelp">
                            </div>

                        </div>

                        <div id="camposAvaliacao">
                            <!-- Campos de Avaliação -->

                            @foreach ($id->avaliacao as $avaliacao)
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação geral</label>
                                    <input type="number" name="avaliacaoGeral" value="{{ $avaliacao->avaliacaoGeral }}"
                                        class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação de Sabor</label>
                                    <input type="number" name="avaliacaoSabor" value="{{ $avaliacao->avaliacaoGeral }}"
                                        class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação de Textura</label>
                                    <input type="number" name="avaliacaoTextura" value="{{ $avaliacao->avaliacaoTextura }}"
                                        class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação de Aparência</label>
                                    <input type="number" name="avaliacaoAparencia"
                                        value="{{ $avaliacao->avaliacaoAparencia }}" class="form-control"
                                        aria-describedby="emailHelp">
                                </div>
                            @endforeach
                            <div class="mb-3">
                                <label for="nomeProduto" class="form-label">Observações</label>
                                <input type="text" value="{{ $avaliacao->observacao }}" name="observacao"
                                    class="form-control" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success ">Atualizar</button>
                        </div>

                    </form>
                @else
                    <h3 class="mt-3 text-center"> Memoria {{ $id->titulo }}</h3>
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Titulo</label>
                            <input type="text" disabled value="{{ $id->titulo }}" name="titulo" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Descrição</label>
                            <input type="text" disabled value="{{ $id->descricao }}" name="descricao"
                                class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">

                            <select name="alimento_id" disabled class="form-select form-select-sm mb-3"
                                aria-label="Large select example">

                                @php
                                    $alimento = \App\Models\Alimento::find($id->alimento_id);
                                @endphp
                                <option value="{{ $id->alimento_id }}" selected>
                                    {{ $alimento ? $alimento->nome : 'Alimento não encontrado' }}</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            @if ($id->imagem)
                                <img src="{{ asset('storage/' . $id->imagem) }}" alt="Imagem" width="100">
                            @else
                                <p>Nenhuma imagem selecionada</p>
                            @endif
                        </div>


                        <div id="camposAvaliacao">
                            <!-- Campos de Avaliação -->
                            @foreach ($id->avaliacao as $avaliacao)
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação Geral</label>
                                    <input type="number" disabled value="{{ $avaliacao->avaliacaoGeral }}"
                                        name="avaliacaoGeral" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação de Sabor</label>
                                    <input type="number" disabled value="{{ $avaliacao->avaliacaoSabor }}"
                                        name="avaliacaoSabor" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação de Textura</label>
                                    <input type="number" disabled value="{{ $avaliacao->avaliacaoTextura }}"
                                        name="avaliacaoTextura" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Avaliação de Aparência</label>
                                    <input type="number" disabled value="{{ $avaliacao->avaliacaoAparencia }}"
                                        name="avaliacaoAparencia" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="nomeProduto" class="form-label">Observações</label>
                                    <input type="text" disabled value="{{ $avaliacao->observacao }}"
                                        name="observacao" class="form-control" aria-describedby="emailHelp">
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex mb-5 justify-content-center">
                            <a href="/memorias" class="btn btn-success">Voltar</a>
                        </div>

                    </form>
                @endif
            </div>

        </div>
    </div>
@endsection
