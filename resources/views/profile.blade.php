@extends('nav2')
@extends('layout.layout')
@section('abas')
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="container">
            <div class="row">
                <div class=" bg-light col">
                    <h3 class="mt-3 mt-3 text-center">Gerenciar Perfil</h3>
                    <form class="pr-3">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Seguidores</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Seguindo</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                        </div>


                        <div class="d-flex justify-content-evenly">
                            <button type="submit" class="btn btn-danger ">Mudar Senha</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
