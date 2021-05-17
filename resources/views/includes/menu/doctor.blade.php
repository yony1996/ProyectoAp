<li class="nav-item {{ Route::is('patient.create') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('patient.create')}}">
        <i class="fas fa-procedures text-primary"></i>Pacientes
    </a>
</li>
<li class="nav-item {{ Route::is('schedule') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('schedule')}}">
        <i class="fas fa-calendar-alt text-orange"></i> Mi horario
    </a>
</li>
<li class="nav-item {{ Route::is('appoiment') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('appoiment')}}">
        <i class="fa fa-address-book text-red"></i> Mis Citas
    </a>
</li>
{{--medico--}}
<li class="nav-item">
    <a class="nav-link " href="./index.html">
        <i class="fas fa-file-prescription text-green"></i> Ficha Medica
    </a>
</li>
<li class="nav-item">
    <a class="nav-link " href="{{route('exam')}}">
        <i class="fas fa-file-medical text-blue"></i> Examenes
    </a>
</li>
