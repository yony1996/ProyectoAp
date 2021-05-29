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
                    <a>Fichas Medica de Pacientes</a>

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

                            @foreach ($records as $record)
                            <tr>
                                <td>{{$record->patient->ci}}</td>
                                <td>{{$record->patient->user->name}}</td>
                                <td>{{$record->patient->last_name}}</td>
                                <td>{{$record->patient->user->email}}</td>
                                <td>{{$record->patient->user->status}}</td>
                                <td>{{$record->updated_at->diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Editar Ficha Medica" href="{{route('record.edit',$record->id)}}"> <i class="fas fa-pen"></i></a>
                                    <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Descargar Ficha Medica" href="{{route('record.print',$record->id)}}"> <i class="fa fa-download"></i></a>
                                    <a class="btn btn-sm btn-info" data-toggle="tooltip" title="Vista Previa de Ficha Medica" href="{{route('record.preview',$record->id)}}" target="_blank"> <i class="fa fa-eye"></i></a>
                                </td>

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
