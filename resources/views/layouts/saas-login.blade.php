{{-- resources/views/layouts/saas-login.blade.php --}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'NexoraMedic - Iniciar Sesión')</title>
    <meta name="description" content="Plataforma SaaS para gestión de consultorios médicos">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('dists/assets/img/logo.ico') }}">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('dists/assets/vendor2/bootstrap/css/bootstrap.min.css') }}">

    {{-- Font Awesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    {{-- Google Fonts: Inter para texto limpio --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --medical-green: #00B8A9;
            --clinical-blue: #3F72AF;
            --pure-white: #FFFFFF;
            --health-gray: #F8F9FA;
            --mint-green: #A7E0E0;
            --soft-red: #FF6B6B;
            --dark-text: #2D4059;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, var(--medical-green) 0%, var(--clinical-blue) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .saas-container {
            max-width: 1400px;
            width: 100%;
            background: var(--pure-white);
            border-radius: 40px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 700px;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Panel izquierdo - Formulario */
        .login-panel {
            padding: 60px 50px;
            background: var(--pure-white);
            display: flex;
            flex-direction: column;
        }

        .brand-header {
            margin-bottom: 40px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .brand-logo img {
            height: 50px;
            width: auto;
        }

        .brand-logo span {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--medical-green), var(--clinical-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-text {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 10px;
        }

        .welcome-subtext {
            color: #6c757d;
            font-size: 16px;
            margin-bottom: 40px;
        }

        /* Formulario */
        .login-form {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-text);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--medical-green);
            font-size: 18px;
        }

        .form-control {
            width: 100%;
            padding: 16px 16px 16px 50px;
            border: 2px solid #e9ecef;
            border-radius: 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: var(--health-gray);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--medical-green);
            background: var(--pure-white);
            box-shadow: 0 0 0 4px rgba(0, 184, 169, 0.1);
        }

        .form-control.is-invalid {
            border-color: var(--soft-red);
        }

        .invalid-feedback {
            color: var(--soft-red);
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #6c757d;
            font-size: 14px;
            cursor: pointer;
        }

        .remember-checkbox input {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--medical-green);
        }

        .forgot-link {
            color: var(--clinical-blue);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: var(--medical-green);
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 18px;
            border: none;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--medical-green), var(--clinical-blue));
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(0, 184, 169, 0.3);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .btn-login::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-login:active::after {
            width: 300px;
            height: 300px;
        }

        .register-link {
            text-align: center;
            color: #6c757d;
            font-size: 15px;
        }

        .register-link a {
            color: var(--medical-green);
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Panel derecho - Imagen/Branding */
        .hero-panel {
            background: linear-gradient(135deg, rgba(0, 184, 169, 0.95), rgba(63, 114, 175, 0.95)),
            url('{{ asset('dists/assets/img/medical-bg.jpg') }}') center/cover;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 30s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
        }

        .hero-badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 8px 16px;
            border-radius: 100px;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hero-title {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero-description {
            font-size: 18px;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 40px;
            max-width: 90%;
        }

        .hero-features {
            display: grid;
            gap: 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .feature-text {
            font-size: 16px;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .saas-container {
                grid-template-columns: 1fr;
                max-width: 500px;
            }

            .hero-panel {
                display: none;
            }

            .login-panel {
                padding: 40px 30px;
            }
        }

        @media (max-width: 480px) {
            .welcome-text {
                font-size: 24px;
            }

            .brand-logo span {
                font-size: 22px;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
<div class="saas-container">
    @yield('content')
</div>

{{-- Scripts --}}
<script src="{{ asset('dists/assets/vendor2/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dists/assets/vendor2/bootstrap/js/bootstrap.min.js') }}"></script>

@stack('scripts')
</body>
</html>
