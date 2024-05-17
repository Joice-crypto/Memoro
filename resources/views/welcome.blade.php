@extends('layout.layout')
@extends('layout.nav')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5  text-warning font-weight-light">Bem Vindo ao Memoro,</h1>
            <h5 class=" text-white font-weight-light"> o lugar onde você pode registrar e compartilhar suas memórias
                sensoriais
                dos alimentos com
                amigos,
                transformando cada refeição em uma experiência inesquecível!</h5>
            <div class="mt-5 d-flex justify-content-between">
                <img style="width:25rem" class="" src="{{ asset('assets/afinalqueijo.png') }}" alt="Logo Memoro">

                <a href="/register"><button style="padding: 15px 30px; font-size: 18px;"
                        class="text-black rounded-pill bg-warning border border-danger-subtle"> Registre-se</button></a>

                <a href="/login"><button style="padding: 15px 30px; font-size: 18px;"
                        class="text-black rounded-pill bg-warning border border-danger-subtle"> Entrar</button></a>

            </div>
        </div>
    </div>
@endsection
