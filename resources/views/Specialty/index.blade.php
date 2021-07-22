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
                        <form action="{{ route('specialty.destroy',$specialty->id) }}" class="deleted-specialty" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('specialty.edit',$specialty->id) }}" data-toggle="tooltip" title="Editar especialidad" class="btn btn-sm btn-primary"> <i class="fas fa-pen"></i></a>
                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar especialidad" type="submit"> <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if (session('eliminar')=='ok-esp')
    <script>
        Swal.fire(
                'Eliminado!',
                'La especialidad se ha eliminado correctamente',
                'success'
        )

    </script>
@endif




<script>
    $('.deleted-specialty').submit(function(e){
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
