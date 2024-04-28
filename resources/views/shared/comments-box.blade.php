<div>
    <form action="{{ route('memorias.comments.store', $memoria->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="comentario" class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Comentar </button>
        </div>

        <hr class="mt-4">
        <p>Comentários</p>
        @foreach ($memorias as $comentario)
            <div class="d-flex mt-3 align-items-start">

                <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="User Avatar">
                <div class="w-100">
                    <div class="d-flex justify-content-between">
                        {{-- <h6 class=""> Nome aqui</h6> --}}
                        <small class="fs-6 fw-light text-muted">{{ $comentario->created_at }} </small>
                    </div>
                    <p class="fs-6 mt-3 fw-light">

                        {{ $comentario->comentario }}
                    </p>
                </div>

            </div>
        @endforeach

    </form>
</div>
