@extends('nav2')
@extends('layout.layout')
@section('abas')
    <div class="tab-pane fade" id="v-pills-novas_memorias" role="tabpanel" aria-labelledby="v-pills-novas_memorias-tab">
        <div class="container">
            <div class="row">
                <div class=" bg-light col">
                    <h3 class="mt-3 mt-3 text-center"> Novas Memorias</h3>
                    <form>

                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Titulo</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Descrição</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-select-sm mb-3" aria-label="Large select example">
                                <option selected>Alimento da Memoria</option>
                                <option value="1">X</option>
                                <option value="2">X</option>
                                <option value="3">X</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Insira uma imagem</label>
                            <input type="file" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Observações</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label>
                                <input type="radio" name="opcao" value="sim" onclick="mostrarCampos()"> Sim
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>
                                <input type="radio" name="opcao" value="nao" onclick="ocultarCampos()"> Não
                            </label>
                        </div>

                        <div id="camposAvaliacao" style="display: none;">
                            <!-- Campos de Avaliação -->
                            <div class="mb-3">
                                <label for="nomeProduto" class="form-label">Avaliação geral</label>
                                <input type="number" id="campo1" class="form-control" aria-describedby="emailHelp">
                            </div>


                            <div class="mb-3">
                                <label for="nomeProduto" class="form-label">Avaliação geral</label>
                                <input type="number" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nomeProduto" class="form-label">Avaliação de Sabor</label>
                                <input type="number" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nomeProduto" class="form-label">Avaliação de Textura</label>
                                <input type="number" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nomeProduto" class="form-label">Avaliação de Aparência</label>
                                <input type="number" class="form-control" aria-describedby="emailHelp">
                            </div>
                        </div>
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
