@extends('layouts.dashboard')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Cita #{{ $appoiment->id }}</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <ul>
            <li>
                <strong>Fecha:</strong> {{ $appoiment->scheduled_date }}
            </li>
            <li>
                <strong>Hora:</strong> {{ $appoiment->scheduled_time_12 }}
            </li>

            @hasanyrole('paciente|admin')
            <li>
                <strong>Médico:</strong> {{ $appoiment->doctor->last_name }}
            </li>
            @endhasanyrole

            @hasanyrole('medico|admin')
            <li>
                <strong>Paciente:</strong> {{ $appoiment->patient->last_name }}
            </li>
            @endhasanyrole

            <li>
                <strong>Especialidad:</strong> {{ $appoiment->specialty->name }}
            </li>

            <li>
                <strong>Tipo:</strong> {{ $appoiment->type }}
            </li>
            <li>
                <strong>Estado:</strong>
                @if ($appoiment->status == 'Cancelada')
                <span class="badge badge-danger">Cancelada</span>
                @else
                <span class="badge badge-success">{{ $appoiment->status }}</span>
                @endif
            </li>
        </ul>

        @if ($appoiment->status == 'Cancelada')
        <div class="alert alert-warning">
            <p>Acerca de la cancelación:</p>
            <ul>
                @if ($appoiment->cancellation)
                <li>
                    <strong>Fecha de cancelación:</strong>
                    {{ $appoiment->cancellation->created_at }}
                </li>
                <li>
                    <strong>¿Quién canceló la cita?:</strong>
                    @if (Auth::user()->id == $appoiment->cancellation->cancelled_by_id)
                    Tú
                    @else
                    {{ $appoiment->cancellation->cancelled_by->name }}
                    @endif
                </li>
                <li>
                    <strong>Justificación:</strong>
                    {{ $appoiment->cancellation->justification }}
                </li>
                @else
                <li>Esta cita fue cancelada antes de su confirmación.</li>
                @endif
            </ul>
        </div>
        @endif

        <a href="{{ route('appoiment') }}" class="btn btn-default">
            Volver
        </a>
    </div>
</div>
@endsection
