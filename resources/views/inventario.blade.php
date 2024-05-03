@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        @include('shared.success-message')
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3 text-center">Inventario</h3>

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

                                <td>{{ $alimento->tipo }}</td>
                                <td>
                                    <a href="{{ route('alimento.view', $alimento->id) }}">
                                        {{ $alimento->nome }}
                                    </a>
                                </td>
                                <td>{{ $alimento->quantidade }}</td>
                                <td>
                                    <div class="align-itens-center d-inline-flex">

                                        <form action="{{ route('alimento.destroy', $alimento->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border: none; background: none; cursor: pointer;">
                                                <i class="fa-solid fa-trash-can " style="color: red;"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('alimento.edit', $alimento->id) }}"
                                            style="text-decoration: none;">
                                            <i class="fa-solid fa-pen-to-square" style="color: #1c71d8;"></i>
                                        </a>
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
