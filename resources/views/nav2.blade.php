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
                <button class="nav-link text-black" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">Inicio</button>
                <button class="nav-link text-black" id="v-pills-inventario-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-inventario" type="button" role="tab"
                    aria-controls="v-pills-inventario" aria-selected="false">Inventario</button>
                <button class="nav-link text-black" id="v-pills-entradas-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-entradas" type="button" role="tab" aria-controls="v-pills-entradas"
                    aria-selected="false">Novas Entradas</button>
                <button class="nav-link text-black" id="v-pills-memorias-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-memorias" type="button" role="tab" aria-controls="v-pills-memorias"
                    aria-selected="false">Memorias</button>
                <button class="nav-link text-black" id="v-pills-novas_memorias-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-novas_memorias" type="button" role="tab"
                    aria-controls="v-pills-messages" aria-selected="false">Novas Memorias</button>
                <button class="nav-link text-black" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">Sair</button>
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
