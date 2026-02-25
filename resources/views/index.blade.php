<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AP Salud Sexual y Reproductiva</title>
    <meta name="description" content="Reserva tu cita de ginecología, control prenatal y planificación familiar en Quito.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('dists/assets/img/logo.ico') }}">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('dists/assets/vendor2/bootstrap/css/bootstrap.min.css') }}">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #d63384;
            --primary-light: #f8e1ec;
            --primary-dark: #b11c66;
            --secondary: #6c5ce7;
            --accent: #00b894;
            --dark: #2d3436;
            --light: #f8f9fa;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--dark);
            margin: 0 0.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: var(--gradient);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover:after {
            width: 80%;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary);
        }

        /* Buttons */
        .btn {
            border-radius: 50px;
            padding: 0.6rem 1.8rem;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: var(--gradient);
            border: none;
            box-shadow: 0 10px 20px rgba(214, 51, 132, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(214, 51, 132, 0.3);
        }

        .btn-success {
            background: linear-gradient(135deg, #00b894, #00cec9);
            border: none;
            box-shadow: 0 10px 20px rgba(0, 184, 148, 0.2);
        }

        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 184, 148, 0.3);
        }

        .btn-light {
            background: white;
            color: var(--primary);
            border: none;
        }

        .btn-light:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
        }

        /* Hero Section */
        #home {
            background: linear-gradient(135deg, #fff5f7 0%, #f0f2fe 100%);
            position: relative;
            overflow: hidden;
        }

        #home:before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 80%;
            height: 200%;
            background: radial-gradient(circle, rgba(214, 51, 132, 0.03) 0%, transparent 70%);
            border-radius: 50%;
        }

        #home img {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: float 6s ease-in-out infinite;
            box-shadow: 0 30px 40px -20px rgba(0, 0, 0, 0.3);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Cards */
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2rem 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .service-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 40px -20px rgba(214, 51, 132, 0.3);
            border-color: transparent;
        }

        .service-card:hover:before {
            transform: translateX(0);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: var(--primary);
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background: var(--gradient);
            color: white;
            transform: rotateY(180deg);
        }

        /* Doctor Card */
        .doctor-card {
            border-radius: 30px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .doctor-card:hover {
            transform: scale(1.02);
            box-shadow: 0 30px 40px -20px rgba(214, 51, 132, 0.3) !important;
        }

        .doctor-card img {
            transition: all 0.5s ease;
        }

        .doctor-card:hover img {
            transform: scale(1.05);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            position: relative;
            overflow: hidden;
        }

        .cta-section:before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 60%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .cta-section * {
            position: relative;
            z-index: 1;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1e272e, #2d3436);
            position: relative;
        }

        footer a {
            transition: all 0.3s ease;
            opacity: 0.8;
        }

        footer a:hover {
            opacity: 1;
            color: var(--primary) !important;
            transform: translateX(5px);
        }

        footer hr {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            height: 1px;
            border: none;
        }

        /* Map */
        iframe {
            filter: grayscale(0.3);
            transition: all 0.3s ease;
        }

        iframe:hover {
            filter: grayscale(0);
        }

        /* Animations */
        [data-aos] {
            pointer-events: none;
        }

        [data-aos].aos-animate {
            pointer-events: auto;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .display-4 {
                font-size: 2.5rem;
            }

            .navbar-collapse {
                background: white;
                padding: 1rem;
                border-radius: 10px;
                margin-top: 1rem;
            }
        }
    </style>
</head>

<body>

    {{-- ================= NAVBAR ================= --}}
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('dists/assets/img/brand/logoApIndex.png') }}" height="50" alt="AP Salud">
                </a>

                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item"><a class="nav-link" href="#home">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#doctor">Especialista</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contactus">Contacto</a></li>
                    </ul>

                    <div class="d-flex">
                        @guest
                        <a class="btn btn-outline-primary rounded-pill px-4" href="{{ route('login') }}">
                            <i class="fas fa-user me-2"></i>Ingresar
                        </a>
                        @else
                        <a class="btn btn-primary rounded-pill px-4" href="{{ route('dashboard') }}">
                            <i class="fas fa-user-circle me-2"></i>{{ Auth::user()->name }}
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

        {{-- ================= HERO ================= --}}
        <section id="home" class="min-vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-4">
                            <i class="fas fa-heartbeat me-2"></i>Salud femenina integral
                        </span>
                        <h1 class="display-4 fw-bold mb-4">
                            Cuida tu <span class="text-primary">salud femenina</span> con nosotros
                        </h1>
                        <p class="lead text-muted mb-5">
                            Control prenatal, planificación familiar y atención ginecológica profesional en Quito.
                            Te acompañamos en cada etapa de tu vida.
                        </p>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('appoiment.create') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-calendar-check me-2"></i>Reservar cita
                            </a>

                            <a href="https://api.whatsapp.com/send?phone=+593992993372"
                                target="_blank"
                                class="btn btn-success btn-lg">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp
                            </a>
                        </div>

                        <div class="mt-5 d-flex gap-4">
                            <div>
                                <h3 class="h2 fw-bold text-primary">+500</h3>
                                <p class="text-muted">Pacientes atendidas</p>
                            </div>
                            <div>
                                <h3 class="h2 fw-bold text-primary">10+</h3>
                                <p class="text-muted">Años de experiencia</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('dists/assets/img/medico2.png') }}"
                            class="img-fluid"
                            alt="Consulta ginecológica">
                    </div>
                </div>
            </div>
        </section>

        {{-- ================= SERVICIOS ================= --}}
        <section id="services" class="py-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                        <i class="fas fa-star me-2"></i>Nuestros servicios
                    </span>
                    <h2 class="display-5 fw-bold">Cuidado integral para ti</h2>
                    <p class="text-muted lead">Atención profesional y personalizada para cada etapa de tu vida</p>
                </div>

                <div class="row g-4">
                    @php
                    $services = [
                    ['icon' => 'fa-baby', 'title' => 'Control prenatal', 'text' => 'Seguimiento médico completo para mamá y bebé durante el embarazo.'],
                    ['icon' => 'fa-flask', 'title' => 'Laboratorio clínico', 'text' => 'Pruebas y análisis clínicos con resultados confiables y rápidos.'],
                    ['icon' => 'fa-heart', 'title' => 'Planificación familiar', 'text' => 'Asesoramiento profesional para que tomes decisiones informadas.'],
                    ['icon' => 'fa-user-md', 'title' => 'Ginecología', 'text' => 'Atención especializada con enfoque humano y profesional.'],
                    ['icon' => 'fa-seedling', 'title' => 'Fertilidad', 'text' => 'Apoyo y tratamientos para quienes buscan concebir.'],
                    ['icon' => 'fa-hospital', 'title' => 'Consulta médica', 'text' => 'Evaluación personalizada y seguimiento de tu salud.'],
                    ];
                    @endphp

                    @foreach ($services as $index => $service)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas {{ $service['icon'] }}"></i>
                            </div>
                            <h4 class="h5 fw-bold mb-3">{{ $service['title'] }}</h4>
                            <p class="text-muted mb-0">{{ $service['text'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ================= CTA CITA ================= --}}
        <section class="cta-section text-white py-5">
            <div class="container text-center py-5">
                <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">¿Lista para cuidar tu salud?</h2>
                <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
                    Agenda tu consulta hoy mismo y recibe atención personalizada
                </p>

                <a href="{{ route('appoiment.create') }}" class="btn btn-light btn-lg px-5" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-calendar-alt me-2"></i>Reservar ahora
                </a>
            </div>
        </section>

        {{-- ================= DOCTOR ================= --}}
        <section id="doctor" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3">
                        <i class="fas fa-user-md me-2"></i>Nuestro especialista
                    </span>
                    <h2 class="display-5 fw-bold">Conoce a tu médico</h2>
                    <p class="text-muted lead">Experiencia y calidez en cada consulta</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-duration="1000">
                        <div class="doctor-card card border-0 shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('dists/assets/img/team/medico.png') }}"
                                    class="card-img-top"
                                    alt="Dr. Andrés Peñaherrera">
                                <div class="position-absolute bottom-0 start-0 end-0 p-4 bg-gradient-dark">
                                    <div class="d-flex justify-content-center gap-3">
                                        <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                                        <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="text-white fs-4"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <h4 class="card-title fw-bold">Dr. Andrés Peñaherrera</h4>
                                <p class="text-primary fw-semibold mb-0">Médico Obstetra - Ginecólogo</p>
                                <p class="text-muted small mt-2">Miembro de la Federación Ecuatoriana de Ginecología</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ================= CONTACTO ================= --}}
        <section id="contactus" class="position-relative">
            <div class="container-fluid p-0">
                <iframe
                    title="Ubicación"
                    src="https://www.google.com/maps?q=Quito&output=embed"
                    width="100%"
                    height="450"
                    style="border:0;"
                    loading="lazy"
                    allowfullscreen>
                </iframe>

                <div class="position-absolute bottom-0 start-0 end-0 bg-gradient-light text-center py-3">
                    <div class="container">
                        <p class="mb-0">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            Av. Principal 123, Quito - Ecuador
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- ================= FOOTER ================= --}}
    <footer class="text-white py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('dists/assets/img/brand/logoApIndex.png') }}" height="40" alt="AP Salud" class="mb-3">
                    <p class="opacity-75">
                        Cuidando tu salud femenina con profesionalismo y calidez.
                        Más de 10 años acompañando a mujeres en todas las etapas de su vida.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-5 opacity-75 hover-opacity-100"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-5 opacity-75 hover-opacity-100"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-5 opacity-75 hover-opacity-100"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-5 opacity-75 hover-opacity-100"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5 class="mb-4">Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <a href="tel:+593992993372" class="text-white text-decoration-none opacity-75">+593 99 299 3372</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <a href="mailto:drandrespaterson@gmail.com" class="text-white text-decoration-none opacity-75">drandrespaterson@gmail.com</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <span class="opacity-75">Quito - Ecuador</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h5 class="mb-4">Horario de atención</h5>
                    <ul class="list-unstyled opacity-75">
                        <li class="mb-2">Lunes a Viernes: 9:00 - 18:00</li>
                        <li class="mb-2">Sábados: 9:00 - 13:00</li>
                        <li class="mb-2">Domingos: Cerrado</li>
                    </ul>
                </div>
            </div>

            <hr class="my-4 bg-white opacity-25">

            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 opacity-75">
                        © {{ date('Y') }} {{ config('app.name') }} - Todos los derechos reservados
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white text-decoration-none opacity-75 me-3">Políticas de privacidad</a>
                    <a href="#" class="text-white text-decoration-none opacity-75">Términos de uso</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Botón flotante de WhatsApp --}}
    <a href="https://api.whatsapp.com/send?phone=+593992993372"
        target="_blank"
        class="position-fixed bottom-0 end-0 m-4"
        style="z-index: 1000;">
        <div class="bg-success text-white rounded-circle p-3 shadow-lg" style="width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
            <i class="fab fa-whatsapp fa-2x"></i>
        </div>
    </a>

    {{-- Scripts --}}
    <script src="{{ asset('dists/assets/vendor2/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dists/assets/vendor2/bootstrap/js/bootstrap.min.js') }}"></script>

    {{-- AOS Animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Smooth scroll para los enlaces
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-sm');
            } else {
                navbar.classList.remove('shadow-sm');
            }
        });
    </script>
</body>

</html>