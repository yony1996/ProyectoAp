<li class="nav-item {{ Route::is('doctor.create') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('doctor.create')}}">
        <i class="fas fa-user-md text-orange"></i> Medicos
    </a>
</li>
<li class="nav-item {{ Route::is('patient.create') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('patient.create')}}">
        <i class="fas fa-procedures text-primary"></i>Pacientes
    </a>
</li>
<li class="nav-item {{ Route::is('specialty') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('specialty')}}">
        <i class="fa fa-user-tag text-red"></i> Especialidades
    </a>
</li>
<li class="nav-item {{ Route::is('appoiment') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('appoiment')}}">
        <i class="fa fa-calendar  text-green"></i> Citas Medicas
    </a>
</li>
<li class="nav-item">
    <a class="nav-link " href="#">
        <i class="far fa-chart-bar  text-red"></i> Frecuencia de Citas
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link " href="#">
        <i class="far fa-chart-bar  text-orange"></i> Medicos más Activos
    </a>
</li>
