@extends('layouts.loginAdd')

@section('content')

<div class="container-all">
    <div class="ctn-form">
        <img class="logo" src="{{asset('dists/assets/img/logo-removebg-preview.png')}}" alt="">
        <h1 class="title">Registrarme</h1>
        <form method="POST" action="{{route('register')}}">
            @csrf

            <label for="User">Nombre</label>
            <input type="text" name="name" value="{{ old('name') }}" autocomplete="off">
            @error('name')
            <span class="invalid-feedback text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="Email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" autocomplete="off">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password">Contraseña</label>
            <input type="password" name="password" value="{{ old('password') }}" autocomplete="off">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button type="submit">Registrarse</button>
        </form>
        <span class="text-footer">¿Ya tienes una cuenta? <a href="{{route('login')}}">Iniciar Sesión</a></span>
    </div>

    <div class="ctn-text2">
        <div class="capa"></div>
        <h1 class="title-description">Lorem ipsum dolor sit amet.</h1>
        <p class="text-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores cumque facilis
            minima ea voluptates quaerat provident consectetur, laborum asperiores voluptas nostrum porro nulla
            mollitia assumenda possimus illum? Debitis, fugit sed.</p>
    </div>
</div>
@endsection
