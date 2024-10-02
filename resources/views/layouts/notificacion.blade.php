{{-- <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="far fa-bell text-black mx-3" style="width: 15px"></i>
        <span class="badge badge-warning navbar-badge">
            {{ auth()->user()->unreadNotifications->count() > 0? auth()->user()->unreadNotifications->count(): '0' }}
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <span
            class="dropdown-item dropdown-header">{{ auth()->user()->unreadNotifications->count() > 0? auth()->user()->unreadNotifications->count(): '0' }}
            Notifications</span>
        <div class="dropdown-divider"></div>
        @foreach (auth()->user()->unreadNotifications as $row)
            <a href="{{ route('mostrarNotificacion', [$row->id, $row->data['id']]) }}" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i>
                {{ $row->data['motivo'] }}
                <p class="text-sm">{{ $row->data['name'] }} {{ $row->data['apellido'] }} <span
                        class="float-right text-muted text-sm">{{ $row->created_at->diffForHumans() }}</span></p>
            </a>
            <div class="dropdown-divider"></div>
        @endforeach
    </div>
</li> --}}
