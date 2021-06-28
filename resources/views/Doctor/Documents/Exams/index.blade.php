@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
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
                    <a>Examenes Pacientes</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    @if (count($exams)>= 1)
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Tiempo de Emision</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($exams as $exam)
                            <tr>
                                <td>{{$exam->patient->ci}}</td>
                                <td>{{$exam->patient->user->name}}</td>
                                <td>{{$exam->patient->last_name}}</td>
                                <td>{{$exam->patient->user->email}}</td>
                                <td>
                                    @if ($exam->patient->user->status==1)
                                    <span class="badge badge-pill badge-success">Activo</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactivo</span>
                                    @endif

                                </td>
                                <td>{{$exam->created_at->diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-sm btn-info"  title="Descargar Orden de Examen" href="{{route('exam.print',$exam->id)}}"> <i class="fa fa-download"></i></a>

                                    <a class="btn btn-sm btn-info"  title="Vista Previa de Orden de Examen" href="{{route('exam.preview',$exam->id)}}" target="_blank"> <i class="fa fa-eye"></i></a>
                                </td>

                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                    @else
                    <div class="col-md-12 text-center">
                        <h1>Aun no existen examenes registrados</h1>
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
