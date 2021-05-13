<!-- Navigation -->
<ul class="navbar-nav">
    <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    @hasrole('admin')
    @include('includes.menu.admin')
    @endhasrole
    @hasrole('medico')
    @include('includes.menu.doctor')
    @endhasrole
    @hasrole('paciente')
    @include('includes.menu.patient')
    @endhasrole

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt text-primary"></i> Cerrar Sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
