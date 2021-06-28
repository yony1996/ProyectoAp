@extends('layouts.loginAdd')

@section('content')

<div class="container-all">
    <div class="ctn-form">
        <img class="logo" src="{{asset('dists/assets/img/logo.png')}}" alt="">
        <h1 class="title">Iniciar Sesión</h1>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <label for="Email">Email</label>
            <input type="email" name="email">
            @error('email') <small class="invalid-feedback text-red" role="alert">{{ $message }}</small>@enderror

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            @error('password') <small class="invalid-feedback text-red" role="alert">{{ $message }}</small>@enderror
            <button type="submit">Ingresar</button>
        </form>
        <span class="text-footer">¿Aún no estas registrado? <a href="{{route('register')}}">Registrate</a></span>
    </div>

    <div class="ctn-text">
        <div class="capa"></div>
        <h1 class="title-description">AP Salud Sexual y Reproductiva</h1>
        <p class="text-description" style="font-size:25px; ">Somos quienes <strong>humanizamos la atención integral de la embarazada</strong> y la acompañamos durante la gestación y parto, cumpliendo un rol esencial en la llegada de un nuevo ser. </p>
    </div>
</div>
@endsection
