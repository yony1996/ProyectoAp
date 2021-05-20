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
                    <a>Pacientes</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">


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
                                <td>{{$exam->patient->user->status}}</td>
                                <td>{{$exam->created_at->diffForHumans()}}</td>
                                <td><a class="btn btn-sm btn-info" data-toggle="tooltip" title="Descargar orden" href="{{route('exam.print',$exam->patient->id)}}"> <i class="fa fa-download"></i></i></a></td>

                            </tr>
                            @endforeach



                        </tbody>
                    </table>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
