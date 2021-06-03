@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 mt-4">

        <div class="card">
            <div class="card-header">
                <h1>Mis Citas Confirmadas</h1>

            </div>
            <div class="card-body table-responsive p-0">

                @if (count($ConfirmedAppoiments)>= 1)
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>

                            <th>Descripcion</th>
                            <th>Especialidad</th>
                            @hasrole('medico')
                            <th>Paciente</th>
                            @endhasrole
                            @hasrole('paciente')
                            <th>Medico</th>
                            @endhasrole
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ConfirmedAppoiments as $appoiment)
                        <tr>

                            <td>{{$appoiment->description}}</td>
                            <td>{{$appoiment->specialty->name}}</td>
                            @hasrole('medico')
                            <td>{{$appoiment->patient->last_name}}</td>
                            @endhasrole
                            @hasrole('paciente')
                            <td>{{$appoiment->doctor->last_name}}</td>
                            @endhasrole
                            <td>{{$appoiment->scheduled_date}}</td>
                            <td>{{$appoiment->scheduled_time_12}}</td>
                            <td>{{$appoiment->type}}</td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
                @else
                <div class="col-md-12 text-center">
                    <h1>Aun no existen citas confirmadas</h1>
                </div>

                @endif

            </div>

            <div class="card-body">
                {{$ConfirmedAppoiments->links()}}
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
