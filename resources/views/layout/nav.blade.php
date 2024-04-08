<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
    data-bs-theme="dark">
    <div class="container">
        <a href="/"><img style="width:10rem" class="" src="{{ asset('assets/logosemFundo.png') }}"
                alt="Logo Memoro"></a>
        {{-- <a class="navbar-brand fw-semibold text-warning" href="/">{{ config('app.name')}}</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-warning" aria-current="page" href="/dashboard">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
