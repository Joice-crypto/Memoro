<link href="style.css" rel="stylesheet" type="text/css" />
<div class="container-fluid">
    <div class="row h-100">
        <div class="col-2 bg-light">
            <!-- Seu menu lateral aqui -->
            <div class="d-flex justify-content-center ">
                <img style="width:50px" class="my-3 " src="{{ asset('assets/icons8-usuário-homem-com-círculo-50.png') }}"
                    alt="user">
            </div>

            <div class="nav mt-2 flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link " href="/profile">Perfil <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/inventario">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/entradas"> Cadastrar Alimento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/memorias">Memorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/novas_memorias"> Cadastrar Memorias</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-9">

            <!-- Conteúdo das abas -->
            <div class="tab-content" id="v-pills-tabContent">
                @yield('abas')
            </div>

        </div>
    </div>

</div>
