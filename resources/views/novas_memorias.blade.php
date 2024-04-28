@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3 text-center"> Novas Memorias</h3>
                <form action="{{ route('memoria.create') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Titulo</label>
                        <input type="text" name="titulo" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Descrição</label>
                        <input type="text" name="descricao" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <select name="alimento_id" class="form-select form-select-sm mb-3"
                            aria-label="Large select example">
                            <option selected>Alimento da Memoria</option>
                            @foreach ($alimentos as $alimento)
                                <option value="{{ $alimento->id }}">{{ $alimento->nome }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Insira uma imagem</label>
                        <input type="File" name="imagem" aria-describedby="emailHelp">
                    </div>

                    <h5>Deseja fazer avaliação?</h5>
                    <div class="mb-3">
                        <label>
                            <input type="radio" name="fazerAvaliacao" value="sim" onclick="mostrarCampos()"> Sim
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>
                            <input type="radio" name="fazerAvaliacao" value="nao" onclick="ocultarCampos()"> Não
                        </label>
                    </div>

                    <div id="camposAvaliacao" style="display: none;">
                        <!-- Campos de Avaliação -->

                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Avaliação geral</label>
                            <input type="number" name="avaliacaoGeral" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Avaliação de Sabor</label>
                            <input type="number" name="avaliacaoSabor" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Avaliação de Textura</label>
                            <input type="number" name="avaliacaoTextura" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Avaliação de Aparência</label>
                            <input type="number" name="avaliacaoAparencia" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Observações</label>
                            <input type="text" name="observacao" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    @foreach (['titulo', 'descricao', 'avaliacaoAparencia', 'avaliacaoSabor', 'avaliacaoTextura', 'avaliacaoGeral', 'observacao'] as $campo)
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
    </div>
@endsection

<script>
    function mostrarCampos() {
        var camposAvaliacao = document.getElementById("camposAvaliacao");
        camposAvaliacao.style.display = "block";
    }

    function ocultarCampos() {
        var camposAvaliacao = document.getElementById("camposAvaliacao");
        camposAvaliacao.style.display = "none";
    }
</script>
