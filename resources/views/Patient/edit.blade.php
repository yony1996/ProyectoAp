@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header">
                    <a>Editar Paciente</a>
                </div>
                <div class="card-body">
                    <form action="{{route('patient.update',$patient->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="user_id" id="user_id" value="{{$patient->user->id}}">
                        <div class="row">
                            <div class="col">
                                <label for="ci">Cedula</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" name="ci" id="ci" value="{{old('ci',$patient->ci)}}" class="form-control" placeholder="Cedula" required autocomplete="off">
                                @error('ci') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col">
                                <label for="age">Edad</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" name="age" id="age" class="form-control" value="{{old('age',$patient->age)}}" placeholder="Edad" required autocomplete="off">
                                @error('age') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nombre</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="name" id="name" value="{{old('name',$patient->user->name)}}" class="form-control" placeholder="Nombre" required autocomplete="off">
                                @error('name') <small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col">
                                <label for="middle_name">Segundo Nombre</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="middle_name" id="middle_name" value="{{old('middle_name',$patient->middle_name)}}" class="form-control" placeholder="Segundo Nombre" required autocomplete="off">
                                @error('middle_name') <small class="text-danger">{{$message}}</small>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="last_name">Apellido</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="last_name" id="last_name" value="{{old('last_name',$patient->last_name)}}" class="form-control" placeholder="Apellido" required autocomplete="off">
                                @error('last_name') <small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col">
                                <label for="second_last_name">Segundo Apellido</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="second_last_name" id="second_last_name" value="{{old('second_last_name',$patient->second_last_name)}}" class="form-control" placeholder="Segundo Apellido" required autocomplete="off">
                                @error('second_last_name')<small class="text-danger">{{$message}}</small>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email',$patient->user->email)}}" placeholder="Correo" required autocomplete="off">
                                @error('email') <small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col">
                                <label for="phone">Telefono</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="9" name="phone" id="phone" class="form-control" value="{{old('phone',$patient->phone)}}" placeholder="Telefono" required autocomplete="off">
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
