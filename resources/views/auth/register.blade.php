@extends('layouts.loginAdd')

@section('content')

<div class="container-all">

    <div class="ctn-form">
        <img class="logo" src="{{asset('dists/assets/img/logo.png')}}" alt="">
        <h1 class="title">Registrarme</h1>
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ci">Cédula</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" value="{{old('ci')}}" name="ci" id="ci" required autocomplete="off">
                    @error('ci') <small class="alert text-danger">{{ $message }}</small>@enderror
                    
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Edad</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" value="{{old('age')}}" name="age" id="age" required autocomplete="off">
                    @error('age')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>

                
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nombre</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');"value="{{old('name')}}" name="name" id="name" required autocomplete="off">
                    @error('name')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="middle_name">Segundo Nombre</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');"value="{{old('middle_name')}}" name="middle_name" id="middle_name" required autocomplete="off">
                    @error('middle_name')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>

                
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="last_name">Apellido</label>
                     <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{old('last_name')}}"name="last_name" id="last_name" required autocomplete="off">
                    @error('last_name')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="User">Segundo Apellido</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{old('second_last_name')}}" name="second_last_name" id="second_last_name" required autocomplete="off">
                    @error('second_last_name')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>

                
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Correo</label>
                    <input type="email" value="{{old('email')}}"name="email" id="email" required autocomplete="off">
                    @error('email')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Teléfono</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" value="{{old('phone')}}"name="phone" id="phone"  required autocomplete="off">
                    @error('phone')
                    <small class="alert text-danger">{{ $message }}</small>
                    @enderror
                </div>

                
            </div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" value="{{ old('password') }}" autocomplete="off">
            @error('password')
            <small class="alert text-danger">{{ $message }}</small>
            @enderror

            <button type="submit">Registrarse</button>
        </form>
        <span class="text-footer">¿Ya tienes una cuenta? <a href="{{route('login')}}">Iniciar Sesión</a></span>
    </div>

    <div class="ctn-text2">
        <div class="capa"></div>
        <h1 class="title-description">AP Salud Sexual y Reproductiva</h1>
        <p class="text-description" style="font-size:25px;">Tomar la decisíon de <strong>tener un bebé es trascendental:</strong> significa decidir que desde ese momento tu corazón empezará tambíen a caminer fuera de tu cuerpo</p>
    </div>
</div>
@endsection
