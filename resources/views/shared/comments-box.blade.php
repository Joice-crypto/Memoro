<div>
    <form action="{{ route('memorias.comments.store', $memoriaComp->memoria->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="comentario" class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Comentar </button>
        </div>
    </form>
    <hr class="mt-4">
    <p>Comentários</p>
    @foreach ($memoriasComp as $memoriaComp)
        @foreach ($memoriaComp->memoria->comments as $comment)
            <div class="d-flex mt-3 align-items-start">

                <img style="width: 50px; height: 50px;" class="me-2 avatar-sm rounded-circle"
                    src="{{ asset('storage/' . $comment->user->avatar) }}" alt="User Avatar">
                <div class="w-100">
                    <div class="d-flex justify-content-between">
                        <small class="fs-6 fw-light text-muted">{{ $comment->user->name }}</small>
                        <small
                            class="fs-6 fw-light text-muted">{{ $comment->created_at->format('d/m/Y h:i A') }}</small>
                    </div>
                    <p class="fs-6 mt-3 fw-light">{{ $comment->comentario }}</p>
                </div>
            </div>
        @endforeach
    @endforeach

</div>
