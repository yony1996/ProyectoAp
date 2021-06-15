@extends('layouts.dashboard')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.2/dist/css/bootstrap-select.min.css">

@endsection

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
                    <a>Crear Medico</a>
                </div>
                <div class="card-body">
                    <form action="{{route('doctor.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="ci">Cedula</label>
                                <input type="text" value="{{old('ci')}}" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" name="ci" id="ci" class="form-control" placeholder="Cedula" required autocomplete="off">
                                @error('ci') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                            <div class="col">
                                <label for="specialties">Especialidades</label>
                                <select name="specialties[]" id="specialties" class="form-control selectpicker" data-style="btn-info" multiple title="Seleccione una o varias">
                                    @foreach ($specialties as $specialty)
                                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nombre</label>
                                <input type="text"  value="{{old('name')}}"style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="name" id="name" class="form-control" placeholder="Nombre" required autocomplete="off">
                                @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="middle_name">Segundo Nombre</label>
                                <input type="text"  value="{{old('middle_name')}}"style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="middle_name" id="middle_name" class="form-control" placeholder="Segundo Nombre" required autocomplete="off">
                                @error('middle_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="last_name">Apellido</label>
                                <input type="text"  value="{{old('last_name')}}"style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="last_name" id="last_name" class="form-control" placeholder="Apellido" required autocomplete="off">
                                @error('last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="second_last_name">Segundo Apellido</label>
                                <input type="text"   value="{{old('second_last_name')}}"style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="second_last_name" id="second_last_name" class="form-control" placeholder="Segundo Apellido" required autocomplete="off">
                                @error('second_last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Correo</label>
                                <input type="email"  value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Correo" required autocomplete="off">
                                @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="phone">Telefono</label>
                                <input type="text"  value="{{old('phone')}}"oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="9" name="phone" id="phone" class="form-control" placeholder="Telefono" required autocomplete="off">
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

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.2/dist/js/bootstrap-select.min.js"></script>
@endsection
