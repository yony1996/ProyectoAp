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
                                        <a class="btn btn-sm btn-info" href="{{route('exam.create',$patient->id)}}"><i class="fas fa-file-medical"></i></a>
                                        <a class="btn btn-sm btn-info" href="{{route('record.create',$patient->id)}}"><i class="fas fa-file-prescription"></i></a>
                                        <a class="btn btn-sm btn-info" href="{{route('patient.edit',$patient->id)}}"> <i class="fas fa-pen"></i></a>
                                        <button class="btn btn-sm btn-danger" type="submit"><i class=" fa fa-trash"></i></button>

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
    </div>
</div>

@endsection
