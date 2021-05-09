<!-- Navigation -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="{{route('dashboard')}}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    @hasanyrole('admin|medico')
    {{--Admin-medico--}}
    <li class="nav-item">
        <a class="nav-link " href="{{route('patient.create')}}">
            <i class="fas fa-procedures text-primary"></i>Pacientes
        </a>
    </li>
    @endhasanyrole

    @hasrole('admin')
    {{--admin--}}

    <li class="nav-item">
        <a class="nav-link " href="{{route('doctor.create')}}">
            <i class="fas fa-user-md text-primary"></i> Medicos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('specialty')}}">
            <i class="fas fa-user-md text-primary"></i> Especialidades
        </a>
    </li>
    @endhasrole

    @hasrole('medico')
    {{--medico--}}
    <li class="nav-item">
        <a class="nav-link " href="{{route('schedule')}}">
            <i class="fas fa-user-md text-primary"></i> Mi horario
        </a>
    </li>
    {{--medico--}}
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
    @endhasrole
    @hasrole('paciente')
    {{--paciente--}}
    <li class="nav-item">
        <a class="nav-link " href="{{route('appoiment.create')}}">
            <i class="fas fa-user-md text-primary"></i> Reservar Cita
        </a>
    </li>
    @endhasrole
    @hasanyrole('paciente|medico')
    {{--paciente-medico--}}
    <li class="nav-item">
        <a class="nav-link " href="./index.html">
            <i class="fas fa-user-md text-primary"></i> Mis Citas
        </a>
    </li>
    @endhasanyrole

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
