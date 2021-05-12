@extends('layouts.dashboard')

@section('content')
<div class="card shadow">

    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Cancelar cita</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if (session('notification'))
        <div class="alert alert-success" role="alert">
            {{ session('notification') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @hasrole('paciente')
        <p>
            Estás a punto de cancelar tu cita reservada con el médico: <br>
            <strong>
                {{ $appoiment->doctor->last_name }}
                (especialidad: {{ $appoiment->specialty->name }})
                para el día {{ $appoiment->scheduled_date }}
            </strong>
            :
        </p>
        @endhasrole
        {{--@hasrole('medico')
        <p>
            Estás a punto de cancelar tu cita con el paciente
            {{ $appointment->patient->name }}
        (especialidad {{ $appointment->specialty->name }})
        para el día {{ $appointment->scheduled_date }}
        (hora {{ $appointment->scheduled_time_12 }}):
        </p>
        @endhasrole
        @hasrole('admin')
        <p>
            Estás a punto de cancelar la cita reservada
            por el paciente {{ $appointment->patient->name }}
            para ser atendido por el médico {{ $appointment->doctor->name }}
            (especialidad {{ $appointment->specialty->name }})
            el día {{ $appointment->scheduled_date }}
            (hora {{ $appointment->scheduled_time_12 }}):
        </p>
        @endhasrole--}}


        <form action="{{route('appoiment.postcancel',$appoiment->id)}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="justification">Por favor cuéntanos el motivo de la cancelación:</label>
                <textarea required id="justification" name="justification" rows="3" class="form-control"></textarea>
            </div>

            <button class="btn btn-danger" type="submit">Cancelar cita</button>
            <a href="{{route('appoiment')}}" class="btn btn-primary">
                Volver al listado de citas sin cancelar
            </a>
        </form>
    </div>

</div>
@endsection
