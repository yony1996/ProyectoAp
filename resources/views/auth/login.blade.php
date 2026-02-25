{{-- resources/views/auth/login-saas.blade.php --}}
@extends('layouts.saas-login')

@section('title', 'NexoraMedic - Iniciar Sesión')

@section('content')
    {{-- Panel Izquierdo - Login --}}
    <div class="login-panel">
        <div class="brand-header">
            <div class="brand-logo">
                <img src="{{ asset('dists/assets/img/logo.png') }}" alt="NexoraMedic">
                <span>NexoraMedic</span>
            </div>
            <h1 class="welcome-text">Bienvenido de vuelta</h1>
            <p class="welcome-subtext">Ingresa a tu cuenta para gestionar tu consultorio</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <div class="form-group">
                <label class="form-label" for="email">Correo Electrónico</label>
                <div class="input-group">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email"
                           name="email"
                           id="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}"
                           placeholder="ejemplo@consultorio.com"
                           required>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <div class="input-group">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password"
                           name="password"
                           id="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="••••••••"
                           required>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                    </span>
                @enderror
            </div>

            <div class="remember-forgot">
                <label class="remember-checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Recordarme</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        <i class="fas fa-key me-1"></i>¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>

            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
            </button>

            <p class="register-link">
                ¿Eres nuevo en NexoraMedic?
                <a href="{{ route('register') }}">
                    Crea tu cuenta <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </p>
        </form>
    </div>

    {{-- Panel Derecho - Branding Médico --}}
    <div class="hero-panel">
        <div class="hero-content">
            <span class="hero-badge">
                <i class="fas fa-shield-heart me-2"></i>SaaS Médico Profesional
            </span>

            <h2 class="hero-title">Humanizando la atención médica</h2>

            <p class="hero-description">
                NexoraMedic es la plataforma integral que conecta consultorios,
                médicos y pacientes en un ecosistema digital seguro y eficiente.
            </p>

            <div class="hero-features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <span class="feature-text">Gestión de citas automatizada</span>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <span class="feature-text">Historial clínico digital</span>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <span class="feature-text">Datos seguros y encriptados</span>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <span class="feature-text">Telemedicina integrada</span>
                </div>
            </div>

            {{-- Testimonios flotantes --}}
            <div class="mt-5 d-flex gap-3">
                <div class="d-flex align-items-center">
                    <div class="d-flex me-3">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                             style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid white; margin-right: -10px;">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                             style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid white;">
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">+2,500</p>
                        <small>médicos confían</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Animación adicional para el formulario
        $(document).ready(function() {
            // Enfoque suave en el campo de email
            setTimeout(function() {
                $('#email').focus();
            }, 500);

            // Efecto de escritura para el título
            const title = "Humanizando la atención médica";
            let i = 0;
            const speed = 50;

            function typeWriter() {
                if (i < title.length) {
                    $('.hero-title').html(title.substring(0, i+1) + '<span class="cursor">|</span>');
                    i++;
                    setTimeout(typeWriter, speed);
                } else {
                    $('.hero-title').html(title);
                }
            }

            // Iniciar efecto solo en desktop
            if ($(window).width() > 992) {
                typeWriter();
            }
        });
    </script>
@endpush
