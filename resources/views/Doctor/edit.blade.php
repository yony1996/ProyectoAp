@extends('layouts.dashboard')


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.2/dist/css/bootstrap-select.min.css">

@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header">
                    <a>Editar Medico</a>
                </div>
                <div class="card-body">
                    <form action="{{route('doctor.update',$doctor->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="user_id" id="user_id" value="{{$doctor->user->id}}">
                        <div class="row">
                            <div class="col">
                                <label for="ci">Cedula</label>
                                <input type="text" name="ci" id="ci" value="{{old('ci',$doctor->ci)}}" class="form-control" placeholder="Cedula" required autocomplete="off">
                                @error('ci') <small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col">
                                <label for="specialties">Especialidades</label>
                                <select name="specialties[]" id="specialties" class="form-control selectpicker" data-style="btn-default" multiple title="Seleccione una o varias">
                                    @foreach ($specialties as $specialty)
                                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" value="{{old('name',$doctor->user->name)}}" class="form-control" placeholder="Nombre" required autocomplete="off">
                                @error('name') <small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col">
                                <label for="middle_name">Segundo Nombre</label>
                                <input type="text" name="middle_name" id="middle_name" value="{{old('middle_name',$doctor->middle_name)}}" class="form-control" placeholder="Segundo Nombre" required autocomplete="off">
                                @error('middle_name') <small class="text-danger">{{$message}}</small>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="last_name">Apellido</label>
                                <input type="text" name="last_name" id="last_name" value="{{old('last_name',$doctor->last_name)}}" class="form-control" placeholder="Apellido" required autocomplete="off">
                                @error('last_name') <small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col">
                                <label for="second_last_name">Segundo Apellido</label>
                                <input type="text" name="second_last_name" id="second_last_name" value="{{old('second_last_name',$doctor->second_last_name)}}" class="form-control" placeholder="Segundo Apellido" required autocomplete="off">
                                @error('second_last_name')<small class="text-danger">{{$message}}</small>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email',$doctor->user->email)}}" placeholder="Correo" required autocomplete="off">
                                @error('email') <small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col">
                                <label for="phone">Telefono</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone',$doctor->phone)}}" placeholder="Telefono" required autocomplete="off">
                                @error('phone') <small class="text-danger">{{$message}}</small>@enderror

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.2/dist/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(() => {
        $('#specialties').selectpicker('val', @json($specialty_ids));
    });

</script>
@endsection
