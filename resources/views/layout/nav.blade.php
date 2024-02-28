

<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="dark">
        <div class="container">
            <a href="/"><img style="width:50px" class=""
            src="{{ asset('assets/memoroFundoPreto.png') }}" alt="Logo Memoro"></a>
            {{-- <a class="navbar-brand fw-semibold text-warning" href="/">{{ config('app.name')}}</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/register">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/profile">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>