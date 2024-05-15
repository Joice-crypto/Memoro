<div>
    @if (Auth::user()->likesMemoria($memoriaComp))
        <form action="{{ route('memorias.unlike', $memoriaComp->id) }}" method="POST">
            @csrf
            <button type="submit" class="fw-light nav-link fs-6"> <span class="fa-solid fa-heart "
                    style="color: #e00606;">{{ $memoriaComp->likes()->count() }}</span>
            </button>
        </form>
    @else
        <form action="{{ route('memorias.like', $memoriaComp->id) }}" method="POST">
            @csrf
            <button type="submit" class="fw-light nav-link fs-6"> <span class=" far  fa-heart "
                    style="color: #e00606;">{{ $memoriaComp->likes()->count() }}</span>
            </button>
        </form>
    @endif
</div>
