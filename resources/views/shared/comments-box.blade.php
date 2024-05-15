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
    <p class="p-2">Comentários</p>
    @foreach ($memoriasComp as $memoriaComp)
        @if ($memoriaComp->memoria && $memoriaComp->memoria->comments->isNotEmpty())
            @foreach ($memoriaComp->memoria->comments as $comment)
                <div class="d-flex mt-3 align-items-start">

                    <img style="width: 50px; height: 50px;" class="me-2 avatar-sm rounded-circle"
                        src="{{ asset('storage/' . $comment->user->avatar) }}" alt="User Avatar">
                    <div class="w-100">
                        <div class="d-flex ">
                            <a href=" {{ route('profile.user', $comment->user->id) }}"> <small
                                    class="fs-6 fw-light  text-muted">{{ $comment->user->name }}</small></a>
                            <small
                                class="fs-6 fw-light ms-2 text-muted">{{ $comment->created_at->format('d/m/Y h:i A') }}
                            </small>
                            <form action="{{ route('memorias.comments.destroy', $comment->id) }}" class="ms-auto"
                                method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="fw-light pt-2 nav-link fs-6"> <i
                                        class="fa-solid fa-trash-alt" style="color: #e00606;"></i> </a>
                            </form>


                        </div>

                        <p class="fs-6  fw-light">{{ $comment->comentario }}</p>

                    </div>
                </div>
                <hr class="mt-2">
            @endforeach
        @endif
    @endforeach

</div>
