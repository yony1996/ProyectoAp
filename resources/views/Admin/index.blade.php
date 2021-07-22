@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card-body">
                @if (session('notification'))
                <div class="alert alert-warning" role="alert">
                    {{session('notification')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

            </div>
    <div class="row">
        {{--Pacientes--}}
        <div class="col-md-6 mt-4">
            <div class="card-body">
                @if (session('notificationP'))
                <div class="alert alert-success" role="alert">
                    {{session('notificationP')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

            </div>

            <div class="card">
                <div class="card-header">
                    <a>Pacientes</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    @if (count($patients)>= 1)
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>

                                <th>nombre</th>
                                <th>email</th>
                                <th>status</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($patients as $patient)
                            <tr>

                                <td>{{$patient->user->name}}</td>
                                <td>{{$patient->user->email}}</td>
                                <td>
                                    @if ($patient->user->status==1)
                                    <span class="badge badge-pill badge-success">Activo</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactivo</span>
                                    @endif
                                </td>

                                <td>

                                    <form action="{{route('patient.destroy',$patient->id)}}" class="deleted-patient" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Editar paciente" href="{{route('patient.edit',$patient->id)}}"> <i class="fas fa-pen"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar paciente" type="submit"><i class=" fa fa-trash"></i></button>

                                    </form>

                                </td>




                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    @else
                    <div class="col-md-12 text-center">
                        <h1>Aun no existen pacientes registrados</h1>
                    </div>

                    @endif

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        {{--Medicos--}}
        <div class="col-md-6 mt-4">
            <div class="card-body">
                @if (session('notificationM'))
                <div class="alert alert-success" role="alert">
                    {{session('notificationM')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

            </div>
            <div class="card">
                <div class="card-header">
                    <a>Medicos</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    @if (count($doctors)>= 1)
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>

                                <th>nombre</th>
                                <th>email</th>
                                <th>status</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($doctors as $doctor)
                            <tr>

                                <td>{{$doctor->user->name}}</td>
                                <td>{{$doctor->user->email}}</td>
                                <td>
                                    @if ($doctor->user->status==1)
                                    <span class="badge badge-pill badge-success">Activo</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactivo</span>
                                    @endif
                                </td>

                                <td>

                                    <form action="{{route('doctor.destroy', $doctor->id)}}" class="deleted-doctor" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Editar doctor" href="{{route('doctor.edit',$doctor->id)}}"> <i class="fas fa-pen"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar doctor" type="submit"><i class=" fa fa-trash"></i></button>

                                    </form>

                                </td>




                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    @else
                    <div class="col-md-12 text-center">
                        <h1>Aun no existen doctores registrados</h1>
                    </div>

                    @endif

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
</div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if (session('eliminar')=='ok-med')
    <script>
        Swal.fire(
                'Eliminado!',
                'El medico se ha eliminado correctamente',
                'success'
        )

    </script>
@endif

@if (session('eliminar')=='ok-pat')
    <script>
        Swal.fire(
                'Eliminado!',
                'El paciente se ha eliminado correctamente',
                'success'
        )

    </script>
@endif


<script>
    $('.deleted-doctor').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Está seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, bórralo!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                /*Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )*/

                this.submit();

            }
        })
    });

    $('.deleted-patient').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Está seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, bórralo!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                this.submit();

            }
        })
    });

</script>
@endsection
