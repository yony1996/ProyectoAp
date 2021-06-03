@extends('layouts.dashboard')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva especialidad</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('specialty') }}" class="btn btn-sm btn-default">
                    Cancelar y volver
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">

        <form action="{{ route('specialty.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de la especialidad</label>
                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="name" class="form-control" value="{{ old('name') }}" required autocomplete="off">
                @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="description" class="form-control" value="{{ old('description') }}" autocomplete="off">
                @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </form>
    </div>
</div>
@endsection
