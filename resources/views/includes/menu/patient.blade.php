<li class="nav-item {{ Route::is('appoiment') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('appoiment')}}">
        <i class="fa fa-address-book text-red"></i> Mis Citas
    </a>
</li>
<li class="nav-item {{ Route::is('appoiment.create') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('appoiment.create')}}">
        <i class="far fa-paper-plane text-orange"></i> Reservar Cita
    </a>
</li>
