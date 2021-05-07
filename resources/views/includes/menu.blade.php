<!-- Navigation -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="{{route('dashboard')}}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-procedures text-primary"></i>Pacientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('doctor.create')}}">
            <i class="fas fa-user-md text-primary"></i> Medicos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Especialidades
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Mi horario
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Reservar Cita
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Mis Citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Ficha Medica
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Examenes
        </a>
    </li>

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
