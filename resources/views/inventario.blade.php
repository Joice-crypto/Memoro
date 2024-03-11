@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3 mt-3 text-center">Inventario</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Controles</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        @foreach ($alimentos as $alimento)
                            <tr>

                                <th>{{ $alimento->tipo }}</th>
                                <td>{{ $alimento->nome }}</td>
                                <td>{{ $alimento->quantidade }}</td>
                                <td><i class="fa-solid fa-trash-can" style="color: red;"></i> <i
                                        class="fa-solid fa-pen-to-square" style="color: #1c71d8;"></i></td>


                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
