{{-- resources/views/auth/register-saas.blade.php --}}
@extends('layouts.saas-login')

@section('title', 'NexoraMedic - Registro')

@section('content')
    <div class="login-panel" style="overflow-y: auto; max-height: 90vh;">
        <div class="brand-header">
            <div class="brand-logo">
                <img src="{{ asset('dists/assets/img/logo.png') }}" alt="NexoraMedic">
                <span>NexoraMedic</span>
            </div>
            <h1 class="welcome-text">Comienza gratis</h1>
            <p class="welcome-subtext">Crea tu cuenta en menos de 2 minutos</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Dr. Juan Pérez">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Consultorio</label>
                    <input type="text" name="consultorio" class="form-control" placeholder="Nombre del consultorio">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="contacto@consultorio.com">
            </div>

            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input type="tel" name="phone" class="form-control" placeholder="+593 99 123 4567">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••">
                </div>
            </div>

            <div class="mb-4">
                <label class="remember-checkbox">
                    <input type="checkbox" name="terms" required>
                    <span>Acepto los <a href="#" class="text-primary">Términos y condiciones</a> y la
                    <a href="#" class="text-primary">Política de privacidad</a></span>
                </label>
            </div>

            <button type="submit" class="btn-login mb-3">
                <i class="fas fa-user-plus me-2"></i>Crear cuenta gratis
            </button>

            <p class="register-link">
                ¿Ya tienes una cuenta?
                <a href="{{ route('login') }}">
                    Inicia sesión <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </p>

            <div class="text-center mt-4">
                <small class="text-muted">
                    <i class="fas fa-shield-alt me-1"></i>
                    Tus datos están seguros con nosotros
                </small>
            </div>
        </form>
    </div>

    <div class="hero-panel">
        <div class="hero-content">
            <span class="hero-badge">
                <i class="fas fa-rocket me-2"></i>14 días gratis
            </span>

            <h2 class="hero-title">Todo lo que necesitas</h2>

            <div class="hero-features">
                <div class="feature-item">
                    <div class="feature-icon">✓</div>
                    <span>Gestión de pacientes ilimitada</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">✓</div>
                    <span>Calendario de citas inteligente</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">✓</div>
                    <span>Facturación electrónica</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">✓</div>
                    <span>Soporte 24/7</span>
                </div>
            </div>
        </div>
    </div>
@endsection
