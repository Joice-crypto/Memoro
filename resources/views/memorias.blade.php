@extends('nav2')
@extends('layout.layout')
@extends('layout.nav')
@section('abas')
    <div class="container">
        @include('shared.success-message')
        <div class="row">
            <div class=" bg-light col">
                <h3 class="mt-3  text-center">Memorias</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Imagem</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Data</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Controles</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        @foreach ($memorias as $memoria)
                            <tr>
                                <th>
                                    <img src="{{ asset('storage/' . $memoria->imagem) }}" alt="profile Pic" height="100"
                                        width="120">
                                </th>
                                <th><a href="{{ route('memoria.show', $memoria->id) }}">{{ $memoria->titulo }}</a></th>
                                <td>{{ $memoria->created_at }}</td>
                                <td>{{ $memoria->descricao }}</td>
                                <td>
                                    <form action="{{ route('memoria.destroy', $memoria->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                                            <i class="fa-solid fa-trash-can" style="color: red;"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('memoria.edit', $memoria->id) }}" style="text-decoration: none;">
                                        <i class="fa-solid fa-pen-to-square" style="color: #1c71d8;"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
