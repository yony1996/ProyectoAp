@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="card-body">
                @if (session('notification'))
                <div class="alert alert-success" role="alert">
                    {{session('notification')}}
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
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($patients as $patient)
                            <tr>
                                <td>{{$patient->ci}}</td>
                                <td>{{$patient->user->name}}</td>
                                <td>{{$patient->last_name}}</td>
                                <td>{{$patient->user->email}}</td>
                                <td>
                                    @if ($patient->user->status==1)
                                    <span class="badge badge-pill badge-success">Activo</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactivo</span>
                                    @endif
                                </td>

                                <td>

                                    <form action="{{route('patient.destroy',$patient->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Crear pedido de Examen" href="{{route('exam.create',$patient->id)}}"><i class="fas fa-file-medical"></i></a>
                                        @if(count($patient->record)==0)
                                        <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Crear Ficha Medica" href="{{route('record.create',$patient->id)}}"><i class="fas fa-file-prescription"></i></a>
                                        @endif
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
        <div class="col-md-6 mt-4">
            <div class="card-body">
                @if (session('notification'))
                <div class="alert alert-success" role="alert">
                    {{session('notification')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

            </div>
            <div class="card">
                <div class="card-header">
                    <a>Citas por Confirmar</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    @if (count($PendingAppoiments)>= 1)
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($PendingAppoiments as $appoiment)
                            <tr>

                                <td>{{$appoiment->patient->last_name}}</td>
                                <td>{{$appoiment->scheduled_date}}</td>
                                <td>{{$appoiment->scheduled_time_12}}</td>



                                <td>

                                    <form action="{{route('appoiment.postconfirm',$appoiment->id)}}" method="POST" class="d-inline-block">
                                        @csrf

                                        <button class="btn btn-sm btn-outline-success" type="submit" data-toggle="tooltip" title="Confirmar Cita">
                                            <i class="ni ni-check-bold"></i>
                                        </button>
                                    </form>
                                    {{--<a href="{{route('appoiment.cancelform',$appoiment->id)}}" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Cancelar Cita"> <i class="far fa-calendar-times"></i> </a>--}}


                                </td>




                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @else
                    <div class="col-md-12 text-center">
                        <h1>Aun no existen Citas registradas</h1>
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
