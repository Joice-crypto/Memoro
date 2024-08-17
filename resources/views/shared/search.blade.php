<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="mb-2">Buscar</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard') }}" method="GET">
            <div class="mb-3">
                <label for="searchType" class="form-label">Tipo de Busca</label>
                <select id="searchType" name="search_type" class="form-select">
                    <option value="memoria">Memória</option>
                    <option value="alimento">Alimento</option>
                </select>
            </div>
            <div class="mb-3">
                <input placeholder="..." class="form-control w-100" type="text" name="search">
            </div>
            <button class="btn btn-dark mt-2">Buscar</button>

            {{-- <input placeholder="..." class="form-control w-100" type="text" name="search">
            <button class="btn btn-dark mt-2"> Buscar</button> --}}
        </form>
    </div>
</div>
