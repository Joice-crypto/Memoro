 <div class="card">
     <div class="card-header pb-0 border-0">
         <h5 class="">Principais Usuários</h5>
     </div>
     <div class="card-body">
         @foreach ($topUsers as $user)
             <div class="hstack gap-2 mb-3">
                 <div class="avatar">
                     <a href="{{ route('profile.user', $user->id) }}"><img style="width: 50px; height:50px"
                             class="rounded-circle" src="{{ asset('storage/' . $user->avatar) }}"
                             alt="avatar usuario"></a>
                 </div>
                 <div class="overflow-hidden">
                     <a class="h6 mb-0" href="#!">{{ $user->name }}</a>
                     <p class="mb-0 small text-truncate">{{ $user->email }}</p>
                 </div>

             </div>
         @endforeach


     </div>
 </div>
