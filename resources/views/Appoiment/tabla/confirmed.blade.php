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
                <th>Accion</th>

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


                <td>
                    @hasrole('medico')
                   <form action="{{route('appoiment.attended',$appoiment->id)}}" method="POST" class="d-inline-block">
                        @csrf

                        <button class="btn btn-sm btn-outline-success" type="submit" data-toggle="tooltip" title="Marcar como atendida">
                            <i class="ni ni-check-bold"></i>
                        </button>
                    </form>
                    @endhasrole

                    <a href="{{route('appoiment.cancelform',$appoiment->id)}}" class="btn btn-sm btn-outline-danger cancel-app" data-toggle="tooltip" title="Cancelar Cita"> <i class="far fa-calendar-times"></i> </a>
                    @hasrole('admin')
                    <a href="{{route('appoiment.show',$appoiment->id)}}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="Ver Detalles "> <i class="fa fa-eye"></i> </a>
                    @endhasrole
                </td>




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
