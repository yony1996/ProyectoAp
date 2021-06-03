<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Bienvenido: {{Auth::user()->name}}</h6>
    </div>


    <div class="dropdown-divider"></div>
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" class="dropdown-item">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar Sesión</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
