<div class="card-body table-responsive p-0">

    @if (count($ConfirmedAppoiments)>= 1)
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>

                <th>Descripcion</th>
                <th>Especialidad</th>
                <th>Medico</th>
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
                <td>{{$appoiment->doctor->last_name}}</td>
                <td>{{$appoiment->scheduled_date}}</td>
                <td>{{$appoiment->scheduled_time_12}}</td>
                <td>{{$appoiment->type}}</td>


                <td>
                    <a href="{{route('appoiment.cancelform',$appoiment->id)}}" class="btn btn-sm btn-outline-danger" title="cancelar cita"> <i class="far fa-calendar-times"></i> </a>

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
