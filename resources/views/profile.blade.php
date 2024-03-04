@extends('layout.layout')
@include('layout.nav')

@extends('layout.nav2')

@section('inicio')

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


@endsection

{{-- vai renderizar a pagina de novas entradas --}}
@section('entradas')
@include('entradas')  
@endsection

{{-- vai renderizar a pagina de inventario --}}
@section('inventario')
@include('inventario')  
@endsection



