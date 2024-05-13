@extends('layout.layout')
@section('content')
    <x-app-layout>

        <div class="container p-3 mb-2 bg-dark-subtle text-dark-emphasis py-4">
            <div class="row">
                <div class="  bg-light col">


                    <div class="mb-3">
                        <img style="width: auto; height: 150px;" class="me-2 mt-4"
                            src="{{ asset('storage/' . $user->avatar) }}" alt="User Avatar">

                    </div>
                    <div class="mb-3">
                        <p> Nome: {{ $user->name }} </p>
                    </div>
                    <div class="mb-3">
                        <p> Seguidores: {{ $user->followers->count() }} </p>
                    </div>
                    <div class="mb-3">
                        <p> Seguindo: {{ $user->followings->count() }} </p>
                    </div>


                    <div class="d-flex justify-content-evenly">
                        @if (Auth::user()->id !== $user->id)
                            @if (Auth::user()->follows($user))
                                <form method="POST" action="{{ route('profile.unfollow', $user->id) }}">
                                    @method('post')
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Deixar de Seguir</button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('profile.follow', $user->id) }}">
                                    @method('post')
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Seguir</button>
                                </form>
                            @endif
                        @endif

                        <a href="/dashboard" type="button" class="btn btn-success">Voltar</a>
                    </div>

                </div>

            </div>

        </div>

    </x-app-layout>
@endsection
