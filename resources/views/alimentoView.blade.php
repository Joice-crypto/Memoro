@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">

                @if ($editing ?? false)
                    <h3 class="mt-3 text-center">Alimento {{ $id->nome }} </h3>
                    <form action="{{ route('alimento.update', $id->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Nome do produto</label>
                            <input type="text" class="form-control" value=" {{ $id->nome }}" name="nome"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select-sm mb-3" name="tipo"
                                aria-label="Large select example">
                                <option>Tipo de produto</option>
                                <option selected>{{ $id->tipo }}</option>
                            </select>

                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nomeProduto" class="form-label">Marca</label>
                                <input type="text" name="marca" value="{{ $id->marca }}" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col">
                                <label for="nomeProduto" class="form-label">Origem</label>
                                <input type="text" value="{{ $id->origem }}" name="origem" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Quantidade disponivel</label>
                            <input type="number" name="quantidade" value="{{ $id->quantidade }}" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        {
                        <div class="d-flex mb-5 justify-content-center">
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                        }

                    </form>
                @endif
                <h3 class="mt-3 text-center">Alimento {{ $alimento->nome }} </h3>
                <div class="mb-3">
                    <label for="nomeProduto" class="form-label">Nome do produto</label>
                    <input type="text" disabled class="form-control" value=" {{ $alimento->nome }}" name="nome"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <select class="form-select form-select-sm mb-3" name="tipo" aria-label="Large select example">
                        <option disabled>Tipo de produto</option>
                        <option selected>{{ $alimento->tipo }}</option>
                    </select>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nomeProduto" class="form-label">Marca</label>
                        <input type="text" name="marca" disabled value="{{ $alimento->marca }}" class="form-control"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="nomeProduto" class="form-label">Origem</label>
                        <input type="text" value="{{ $alimento->origem }}" disabled name="origem" class="form-control"
                            aria-describedby="emailHelp">
                    </div>

                </div>
                <div class="mb-3">
                    <label for="nomeProduto" class="form-label">Quantidade disponivel</label>
                    <input type="number" disabled name="quantidade" value="{{ $alimento->quantidade }}"
                        class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="d-flex mb-5 justify-content-center">
                    <a href="/inventario" class="btn btn-success">Voltar</a>
                </div>
            </div>

        </div>
    </div>
@endsection
