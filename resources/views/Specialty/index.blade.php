@extends('layouts.dashboard')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Especialidades</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('specialties/create') }}" class="btn btn-sm btn-success">
                    Nueva especialidad
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (session('notification'))
        <div class="alert alert-success" role="alert">
            {{ session('notification') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($specialties as $specialty)
                <tr>
                    <th scope="row">
                        {{ $specialty->name }}
                    </th>
                    <td>
                        {{ $specialty->description }}
                    </td>
                    <td>
                        <form action="{{ route('specialty.destroy',$specialty->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('specialty.edit',$specialty->id) }}" class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i></a>
                            <button class="btn btn-sm btn-danger" type="submit"> <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
