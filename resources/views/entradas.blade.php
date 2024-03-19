@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3 text-center">Cadastrar novo item</h3>
                <form action="{{ route('alimento.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Nome do produto</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-select-sm mb-3" name="tipo" aria-label="Large select example">
                            <option selected disabled>Tipo de produto</option>
                            <option value="Queijo">Queijo</option>
                            <option value="Vinho">Vinho</option>
                            <option value="Charuto">Charuto</option>
                        </select>

                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nomeProduto" class="form-label">Marca</label>
                            <input type="text" name="marca" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="col">
                            <label for="nomeProduto" class="form-label">Origem</label>
                            <input type="text" name="origem" class="form-control" aria-describedby="emailHelp">
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Quantidade disponivel</label>
                        <input type="number" name="quantidade" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Observações</label>
                        <input type="text" name="observacoes" class="form-control" aria-describedby="emailHelp">
                    </div>
                    @foreach (['nome', 'tipo', 'marca', 'origem', 'quantidade', 'observacoes'] as $campo)
                        @error($campo)
                            <span class="fs-6 text-danger">{{ $message }}</span>
                        @enderror
                    @endforeach
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success ">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
