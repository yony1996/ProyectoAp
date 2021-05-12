<div class="card-body table-responsive p-0">

    @if (count($OldAppoiments)>= 1)
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>

                <th>Descripcion</th>
                <th>Especialidad</th>
                <th>Medico</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Tipo</th>
                <th>Estado</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($OldAppoiments as $appoiment)
            <tr>

                <td>{{$appoiment->description}}</td>
                <td>{{$appoiment->specialty->name}}</td>
                <td>{{$appoiment->doctor->last_name}}</td>
                <td>{{$appoiment->scheduled_date}}</td>
                <td>{{$appoiment->scheduled_time_12}}</td>
                <td>{{$appoiment->type}}</td>
                <td>{{$appoiment->status}}</td>







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
