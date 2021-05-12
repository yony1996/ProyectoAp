@extends('layouts.loginAdd')

@section('content')

<div class="container-all">
    <div class="ctn-form">
        <img class="logo" src="{{asset('dists/assets/img/logo-removebg-preview.png')}}" alt="">
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
        <h1 class="title-description">Lorem ipsum dolor sit amet.</h1>
        <p class="text-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores cumque facilis
            minima ea voluptates quaerat provident consectetur, laborum asperiores voluptas nostrum porro nulla
            mollitia assumenda possimus illum? Debitis, fugit sed.</p>
    </div>
</div>
@endsection
