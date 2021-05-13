<div class="card-body table-responsive p-0">

    @if (count($OldAppoiments)>= 1)
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>


                <th>Especialidad</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Accion</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($OldAppoiments as $appoiment)
            <tr>
                <td>{{$appoiment->specialty->name}}</td>
                <td>{{$appoiment->scheduled_date}}</td>
                <td>{{$appoiment->scheduled_time_12}}</td>
                <td>{{$appoiment->status}}</td>
                <td><a href="{{route('appoiment.show',$appoiment->id)}}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="Ver Detalles"><i class="fa fa-eye"></i></a></td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @else
    <div class="col-md-12 text-center">
        <h1>Aun no existen citas atendidas</h1>
    </div>

    @endif

</div>
<div class="card-body">
    {{$OldAppoiments->links()}}
</div>
