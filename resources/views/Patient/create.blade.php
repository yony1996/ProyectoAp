@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
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
                    <a>Crear Paciente</a>
                </div>
                <div class="card-body">
                    <form action="{{route('patient.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="ci">Cedula</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" name="ci" id="ci" class="form-control" placeholder="Cedula" required autocomplete="off">
                                @error('ci') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                            <div class="col">
                                <label for="age">Edad</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" name="age" id="age" class="form-control" placeholder="Edad" required autocomplete="off">
                                @error('age') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nombre</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="name" id="name" class="form-control" placeholder="Nombre" required autocomplete="off">
                                @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="middle_name">Segundo Nombre</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="middle_name" id="middle_name" class="form-control" placeholder="Segundo Nombre" required autocomplete="off">
                                @error('middle_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="last_name">Apellido</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="last_name" id="last_name" class="form-control" placeholder="Apellido" required autocomplete="off">
                                @error('last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="second_last_name">Segundo Apellido</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="second_last_name" id="second_last_name" class="form-control" placeholder="Segundo Apellido" required autocomplete="off">
                                @error('second_last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Correo" required autocomplete="off">
                                @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="phone">Telefono</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" name="phone" id="phone" class="form-control" placeholder="Telefono" required autocomplete="off">
                                @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-primary" type="submit">Crear</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
