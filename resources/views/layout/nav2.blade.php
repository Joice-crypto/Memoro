
<link rel="stylesheet" href="memoro/resources/css/app.css">

<div class="container-fluid">
    <div class="row h-100">
      <div class="col-2 bg-light">
        <!-- Seu menu lateral aqui -->
        <div class="nav mt-2 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link text-black active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Inicio</button>
          <button class="nav-link text-black" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Inventario</button>
          <button class="nav-link text-black" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Novas Entradas</button>
          <button class="nav-link text-black" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sair</button>
        </div>
      </div>
      <div class="col-9">
        <!-- Conteúdo das abas -->
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">   @yield('inicio')</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Clicou aqui 2</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Clicou aqui 3</div>
            <div class="tab-pane fade" id"d=v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Clicou aqui 4</div>
        </div>
        
      </div>
    </div>
  </div>
  


   


    