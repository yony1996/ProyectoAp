<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AP Salud</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('dists/assets/img/logo.ico')}}">
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/css/plugin.css')}}" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/vendor2/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/vendor2/font-awesome/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/vendor2/revolution-slider/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/vendor2/revolution-slider/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/vendor2/revolution-slider/revolution/css/navigation.css')}}">

    <!-- typography -->
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/css/typographies.css')}}" />

    <!-- templete element -->
    <link rel="stylesheet" type="text/css" href="{{asset('dists/assets/css/template-element.css')}}" />

    <!-- template CSS -->
    <link href="{{asset('dists/assets/css/style.css')}}" rel="stylesheet">

    <!-- responsive CSS -->
    <link href="{{asset('dists/assets/css/responsive.css')}}" rel="stylesheet">

    <!-- custom CSS -->
    <link href="{{asset('dists/assets/css/custom.css')}}" rel="stylesheet">
    <!--
    <script data-dapp-detection="">
        ! function() {
            let e = !1;

            function n() {
                if (!e) {
                    const n = document.createElement("meta");
                    n.name = "dapp-detected", document.head.appendChild(n), e = !0
                }
            }
            if (window.hasOwnProperty("ethereum")) {
                if (window.__disableDappDetectionInsertion = !0, void 0 === window.ethereum) return;
                n()
            } else {
                var t = window.ethereum;
                Object.defineProperty(window, "ethereum", {
                    configurable: !0
                    , enumerable: !1
                    , set: function(e) {
                        window.__disableDappDetectionInsertion || n(), t = e
                    }
                    , get: function() {
                        if (!window.__disableDappDetectionInsertion) {
                            const e = arguments.callee;
                            e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf("getOwnPropertyNames") || n()
                        }
                        return t
                    }
                })
            }
        }();

    </script>
    <style type="text/css" id="#jarallax-clip-0">
        #jarallax-container-0 {
            clip: rect(0 674.5px 828.15625px 0);
            clip: rect(0, 674.5px, 828.15625px, 0);
        }

    </style>
    <style type="text/css" id="#jarallax-clip-2">
        #jarallax-container-2 {
            clip: rect(0 1349px 261px 0);
            clip: rect(0, 1349px, 261px, 0);
        }

    </style>
    <style type="text/css" id="#jarallax-clip-3">
        #jarallax-container-3 {
            clip: rect(0 1349px 816.09375px 0);
            clip: rect(0, 1349px, 816.09375px, 0);
        }

    </style>
    <style type="text/css" id="#jarallax-clip-1">
        #jarallax-container-1 {
            clip: rect(0 1349px 866.3125px 0);
            clip: rect(0, 1349px, 866.3125px, 0);
        }

    </style>
    <style type="text/css" id="#jarallax-clip-4">
        #jarallax-container-4 {
            clip: rect(0 1349px 650px 0);
            clip: rect(0, 1349px, 650px, 0);
        }

    </style>-->
</head>

<body >
    <header class="top-bar header-fancy-topbar">
        <div class="topbar">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="topbar-social text-center text-md-left">
                            <ul class="list-inline d-md-flex">
                                <li><a href="#"><span class="ti-facebook"></span></a></li>
                                <li><a href="#"><span class="ti-instagram"></span></a></li>
                                <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=+593992993372" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 xs-mb-10">
                        <div class="topbar-call text-center text-md-right">
                            <ul class="list-inline d-md-flex d-inline-block justify-content-end">
                                <li><i class="fa fa-envelope"></i>APConsultorio@gmail.com</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:+1234567890"> <span> 555-555 </span>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav hidden class="nav-white header-fancy">
            <div class="nav-header">
                <a href="index.html" class="brand">
                    <img src="{{asset('dists/assets/img/brand/Sin título-1.png')}}" class="img-fluid" alt="" />
                </a>
                <button class="toggle-bar">
                    <span class="ti-menu"></span>
                </button>
            </div>
            <ul class="menu">
                <li class="scrollspy active"><a href="#home">Inicio</a></li>
                <li class="scrollspy"><a href="#services">Servicios</a></li>
                <li class="scrollspy"><a href="#appointment">Citas</a></li>
                <!--<li class="scrollspy"><a href="#testimonials">Testimonials</a></li>-->
                <li class="scrollspy"><a href="#doctor">Doctor</a></li>
                {{--<li class="scrollspy"><a href="#blog">Noticias</a></li>--}}
                <li class="scrollspy"><a href="#contactus">Contacto</a></li>
                @guest
                <a class="mt-10 cs-button x-small" href="{{route('login')}}">Iniciar Sesion</a>
                @else
                <a class="mt-10 cs-button  x-small" href="{{route('dashboard')}}">{{Auth::user()->name}}</a>

                @endguest


            </ul>



        </nav>
    </header>

    <!-- Start Slider -->
    <section id="home">
        <article class="content">
            <div id="rev_slider_1083_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="travel" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
                <div id="rev_slider_1083_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-3070" data-transition="parallaxhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Number One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('dists/assets/img/slide333.jpeg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-3071" data-transition="parallaxhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Number Two" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('dists/assets/img/slide222.jpeg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                    <div style="" class="tp-static-layers">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption Travel-BigCaption   tp-resizeme tp-static-layer" id="slider-1083-layer-1" data-x="['left','left','left','left']" data-hoffset="['90','90','60','40']" data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" data-fontsize="['50','50','50','35']" data-lineheight="['50','50','50','35']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-startslide="0" data-endslide="3" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap;text-transform:left; color:#ff3399; font-weight:bold;">Sientete libre, segura y<br> lista para cada etapa de tu vida.
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Travel-SmallCaption   tp-resizeme tp-static-layer" id="slider-1083-layer-2" data-x="['left','left','left','left']" data-hoffset="['90','90','60','40']" data-y="['center','center','center','center']" data-voffset="['80','80','80','80']" data-fontsize="['25','25','25','20']" data-lineheight="['30','30','30','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-startslide="0" data-endslide="3" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap;text-transform:left; color: #fff;">Los Mejores Cuidados en tu Embarazo </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Travel-CallToAction cs-button x-small  tp-static-layer" id="slider-1083-layer-3" data-x="['left','left','left','left']" data-hoffset="['90','90','60','40']" data-y="['center','center','center','center']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]' data-responsive_offset="on" data-responsive="off" data-startslide="0" data-endslide="3" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(61, 9, 31, 1.00);bg:rgba(61, 9, 31, 0.15);bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[20,20,20,20]" style="z-index: 7; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            Sobre Nosotros</div>
                    </div>
                    <div class="tp-bannertimer tp-bottom" style="height: 7px; background-color: rgba(0, 0, 0, 0.25);">
                    </div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->

        </article>
    </section>
    <!-- End Slider -->

    <section id="services" class="section-ptb-0">
        <div class="row no-gutter">
            <div class="col-lg-6 col-12" data-jarallax='{"speed": 0.0}' style="background-image: url({{asset('dists/assets/img/about.jpg')}});">
                <div class="px-100 py-140 sm-pl-30 sm-pr-30 sm-pb-30 sm-pt-30 text-right xs-text-center">
                    <div class="section-heading text-right">

                        <h1 class="heading fs-40">Bienvenido a<br> <span class="theme-color">AP Salud Sexual y Reproductiva</span></h1>
                    </div>
                    <div class="mt-30">
                        <a class="cs-button medium" href="{{route('appoiment.create')}}">Reservar Cita</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row no-gutter">
                    <div class="col-md-4 col-12">
                        <div class="ser-box feature-txt text-center mb-0">
                            <div class="feature-icon mb-20">
                                <img src="{{asset('dists/assets/img/icon-1.png')}}" class="" alt="" />
                            </div>
                            <div class="feature-info ">
                                <h4 class="text-back mb-20">Control<br> Prenatal</h4>
                                <p>Todo para asegurarse que mamá y bebé estén bien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="ser-box bx2 feature-txt text-center mb-0">
                            <div class="feature-icon mb-20">
                                <img src="{{asset('dists/assets/img/icon-2.png')}}" class="" alt="" />
                            </div>
                            <div class="feature-info ">
                                <h4 class="text-back mb-20">Pruebas de laboratorio</h4>
                                <p>while the lovely valley teems with vapour around me, and the...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="ser-box feature-txt text-center mb-0">
                            <div class="feature-icon mb-20">
                                <img src="{{asset('dists/assets/img/icon-3.png')}}" class="" alt="" />
                            </div>
                            <div class="feature-info ">
                                <h4 class="text-back mb-20">Planificación familiar</h4>
                                <p>while the lovely valley teems with vapour around me, and the...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="ser-box bx2 feature-txt text-center mb-0">
                            <div class="feature-icon mb-20">
                                <img src="{{asset('dists/assets/img/icon-4.png')}}" class="" alt="" />
                            </div>
                            <div class="feature-info ">
                                <h4 class="text-back mb-20">Ginecología</h4><br>
                                <p>while the lovely valley teems with vapour around me, and the...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="ser-box feature-txt text-center mb-0">
                            <div class="feature-icon mb-20">
                                <img src="{{asset('dists/assets/img/icon-6.png')}}" class="" alt="" />
                            </div>
                            <div class="feature-info ">
                                <h4 class="text-back mb-20">Tratamiento de fertilidad</h4>
                                <p>while the lovely valley teems with vapour around me, and the...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="ser-box bx2 feature-txt text-center mb-0">
                            <div class="feature-icon mb-20">
                                <img src="{{asset('dists/assets/img/icon-5.png')}}" class="" alt="" />
                            </div>
                            <div class="feature-info">
                                <h4 class="text-back mb-20">Servicios medicos</h4>
                                <p>while the lovely valley teems with vapour around me, and the...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-80">
                <div class="col-md-4 col-12">
                    <div class="feature-txt text-center mb-50">
                        <div class="feature-icon">
                            <i class="far fa-clock theme-color"></i>
                        </div>
                        <div class="feature-info mb-20 px-30">
                            <h4 class="fs-16 f-w6">Horario de Atención</h4>
                            <p>Lunes a Viernes: 08:00 am - 04:00 pm</p>
                            <p>Domiciliaria</p>
                            <p>Previa cita</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature-txt text-center xs-mb-50">
                        <div class="feature-icon">
                            <i class="fa fa-stethoscope theme-color"></i>
                        </div>
                        <div class="feature-info mb-20 px-30">
                            <h4 class="fs-16 f-w6">Atención Médica</h4>
                            <p>AP Sexual y Reproductiva te brinda la mejor atención médica.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="feature-txt text-center">
                        <div class="feature-icon">
                            <i class="fa fa-ambulance theme-color"></i>
                        </div>
                        <div class="feature-info mb-20 px-30">
                            <h4 class="fs-16 f-w6">Atención de Emergencia</h4>
                            <p>AP Sexual y Reproductiva te atiende por emergencia</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="appointment" class="section-ptb-150" data-jarallax='{"speed": 0.0}' style="background-image: url({{asset('dists/assets/img/app-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="section-heading text-left mb-50">
                        <h1 class="heading">Reserva una cita con nosotros</h1>
                    </div>
                    <div class="btn">
                        <a href="{{route('appoiment.create')}}" class="cs-button medium">Reserva ya!</a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--<section id="testimonials" class="section-ptb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center">
                        <h1 class="heading">Your dream - Our mission</h1>
                        <p>A small river name Duden flows by their place es supplies with the necessary regelialia esser
                            paradisematic country.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="2" data-md-items="2"
                        data-sm-items="1" data-xs-items="1" data-xx-items="1">
                        <div class="item">
                            <div class="testimonials">
                                <div class="testimonials-avatar"> <img alt="" src="assets/img/testimonials/avtar-1.jpg">
                                </div>
                                <div class="testimonials-info"> Aenean pulvinar, turpis non consectetur feugiat, ipsum
                                    urna dapibus sem, sit amet vulputate mi nisl et sapien. Nam laoreet aliquam
                                    sollicitudin. Curabitur nisl ligula, gravida sit amet.</div>
                                <div class="author-info"> <strong>Caspian Bellevedere<span> - Lorem
                                            Ipsum</span></strong> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials">
                                <div class="testimonials-avatar"> <img alt="" src="assets/img/testimonials/avtar-2.jpg">
                                </div>
                                <div class="testimonials-info"> Aenean pulvinar, turpis non consectetur feugiat, ipsum
                                    urna dapibus sem, sit amet vulputate mi nisl et sapien. Nam laoreet aliquam
                                    sollicitudin. Curabitur nisl ligula, gravida sit amet.</div>
                                <div class="author-info"> <strong>Johen doe<span> - Lorem Ipsum</span></strong> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials">
                                <div class="testimonials-avatar"> <img alt="" src="assets/img/testimonials/avtar-3.jpg">
                                </div>
                                <div class="testimonials-info"> Aenean pulvinar, turpis non consectetur feugiat, ipsum
                                    urna dapibus sem, sit amet vulputate mi nisl et sapien. Nam laoreet aliquam
                                    sollicitudin. Curabitur nisl ligula, gravida sit amet.</div>
                                <div class="author-info"> <strong>Mical Smith<span> - Lorem Ipsum</span></strong> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    {{--<section class="section-ptb-0 bg-light">
        <div class="row align-items-center no-gutter">
            <div class="col-lg-6 col-12">
                <div class="px-100 xs-px-20 xs-py-30">
                    <div class="section-heading text-left max-width-650 mb-30">
                        <h1 class="heading">We are helping people who are:</h1>
                    </div>
                    <p class="max-width-700 mb-20">Eiusmod tempor incididunt ut labore et dolore magna aliqua. Utas sed
                        enim ad minim veniam, quis nostrud exercitation ipsum ullamco laboris nisi aliquip ex ea commodo
                        consequat duis aute irure.</p>

                    <ul class="list list-hand">
                        <li> Couples Who Cannot Conceive Naturally</li>
                        <li> Single Women Who Want to Get Pregnant</li>
                        <li> Men With Fertility Issues</li>
                        <li> Couples With Recurrent Pregnancy Losses</li>
                        <li> Couples Carrying Genetically Inherited Disorders</li>
                        <li> Cancer Patients Who Want to Preserve Their Eggs</li>
                        <li> Women Who Want to Freeze Their Eggs</li>
                    </ul>

                    <a class="cs-button x-small mt-30" href="#">Book A Visit</a>

                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="portfolio-item video">
                    <img src="{{asset('dists/assets/img/video.jpg')}}" class="img-fluid" alt="">
    <a class="popup portfolio-img" rel="prettyPhoto[gallery1]" href="https://youtu.be/nl5vUwaHZ8U"><img src="{{asset('dists/assets/img/play.png')}}" class="img-fluid" alt=""></a>
    </div>
    </div>
    </div>
    </section>--}}


    {{--<section class="section-ptb-80" data-jarallax="{&quot;speed&quot;: 0.0}" style="background-image: none; position: relative; z-index: 0; background-attachment: scroll; background-size: auto;" data-jarallax-original-styles="background-image: url(assets/img/bg-img.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-6 sm-mb-30 text-center">
                    <div class="counter left-icon text-white">
                        <i class="fa fa-user white" aria-hidden="true"></i>
                        <h1 class="count f-w6 white">1021</h1>
                        <label>HAPPY CUSTOMERS</label>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6 sm-mb-30 text-center">
                    <div class="counter left-icon text-white">
                        <i class="fa fa-trophy white" aria-hidden="true"></i>
                        <h1 class="count f-w6 white">200</h1>
                        <label>HEALTH INSURANCE</label>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6 sm-mb-30 text-center">
                    <div class="counter left-icon text-white">
                        <i class="fas fa-chart-pie white" aria-hidden="true"></i>
                        <h1 class="count f-w6 white">400</h1>
                        <label>TRUST MEMBERS</label>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6 sm-mb-30 text-center">
                    <div class="counter left-icon text-white">
                        <i class="fa fa-heartbeat white" aria-hidden="true"></i>
                        <h1 class="count f-w6 white">600</h1>
                        <label>SUCCESS AWARDS</label>
                    </div>
                </div>
            </div>
        </div>
        <div id="jarallax-container-2" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
            <div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;http://html.multipurposethemes.com/pregnancy/pregnancy-two/images/bg-img.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1682.01px; height: 629px; overflow: hidden; pointer-events: none; margin-left: -166.503px; margin-top: 0px; visibility: visible; transform: translateY(0px) translateZ(0px);">
            </div>
        </div>
    </section>--}}
    <section id="doctor" class="section-ptb-0">

        <div class="wrapper">

            <div class="content1">
                <div class="img-container">
                    <img src="{{asset('dists/assets/img/team/team-5.jpg')}}" alt="">
                </div>
                <div class="content2">
                    <div class="head2">
                        <p>Andres Peñaherrera</p>
                        <span>Médico obstetriz</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--
    <section id="blog" class="section-ptb-80" data-jarallax='{"speed": 0.0}' style="background-image: url({{asset('dists/assets/img/bg-img2.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center max-width-550 mx-auto">
                    <h1 class="heading">Our New Facilities</h1>
                    <p>A small river name Duden flows by their place es supplies with the necessary regelialia
                        esser
                        paradisematic country.</p>
                </div>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-lg-4 col-md-4">
                <div class="blog-post xs-mb-50">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="{{asset('dists/assets/img/blog-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">Norepeat have Distribution Publishing Packages</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2019</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Raise your design from the dead with an army of Zombie Ipsum, frightful filler
                                text
                                that just won't die. Try the lorem ipsum of the undead if you dare.</p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="cs-button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="social list-style-none float-right">
                                <strong>Share : </strong>
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fab fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog-post xs-mb-50">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="{{asset('dists/assets/img/blog-02.jpg')}}" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">Versions Over the Years Have Been Readable</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2019</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Raise your design from the dead with an army of Zombie Ipsum, frightful filler
                                text
                                that just won't die. Try the lorem ipsum of the undead if you dare.</p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="cs-button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="social list-style-none float-right">
                                <strong>Share : </strong>
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fab fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog-post">
                    <div class="entry-image clearfix">
                        <img class="img-fluid" src="{{asset('dists/assets/img/blog-03.jpg')}}" alt="">
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">Wed page editers now use here Lorem ipsum</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2019</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Raise your design from the dead with an army of Zombie Ipsum, frightful filler
                                text
                                that just won't die. Try the lorem ipsum of the undead if you dare.</p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="cs-button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="social list-style-none float-right">
                                <strong>Share : </strong>
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fab fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    --}}
    {{--<section class="section-ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center max-width-550 mx-auto">
                        <h1 class="heading">Insurance Partners</h1>
                        <p>A small river name Duden flows by their place es supplies with the necessary regelialia
                            esser
                            paradisematic country.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-12">
                    <div class="client clients-border column-5 text-center">
                        <ul class="list-unstyled">
                            <li>
                                <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-1.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-2.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-3.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-4.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-5.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-6.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-1.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-2.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-3.png')}}" alt="">
    </li>
    <li>
        <img class="img-fluid mx-auto" src="{{asset('dists/assets/img/logo-4.png')}}" alt="">
    </li>
    </ul>
    </div>
    </div>

    </div>
    </div>
    </section>--}}

    <section id="contactus" class="section-ptb-0" data-jarallax='{"speed": 0.0}'>

        <div class="row">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510694.056744402!2d-78.71074516936699!3d-0.18590534316641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a4002427c9f%3A0x44b991e158ef5572!2sQuito!5e0!3m2!1sen!2sec!4v1616954922629!5m2!1sen!2sec" width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


    </section>

    <section class="actionbox2 bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="actionbox2 actionbox-res actionbox-border text-center">
                        <h3>Para cualquier consulta o asistencia, llame al teléfono: <span class="fa fa-phone"></span> (+593)0992993372</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-black pt-50">
        <div class="container">
            <div class="row ">

                <div class="col xs-pt-30">
                    <h4 class="text-white mb-30 mt-10 text-uppercase">Contáctanos</h4>
                    <ul class="address">
                        <li><i class="fa fa-map-marker"></i>
                            <p>Ubicación: 4328 White Avenue, Suite # 865 Sacramento, CA 95817 USA</p>
                        </li>
                        <li><i class="fa fa-phone"></i>
                            <p>+593992993372</p>
                        </li>
                        <li><i class="fa fa-envelope-o"></i>Email: info@pregnancycare.com</li>
                    </ul>
                </div>
                <div class="col  sm-mt-30">
                    <div class="footer-link footer-link-hedding">
                        <h4 class="txt-white mb-30 mt-10 text-uppercase">Enlace rápido</h4>
                        <ul>
                            <li><a href="#home">Inicio</a></li>
                            <li><a href="#services">Servicios</a></li>
                            <li><a href="#appointment">Citas</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer-copyright mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class="mt-15"> ©Copyright <span id="copyright">2020</span> <a href="#"> Pregnancy </a>
                            All
                            Rights Reserved </p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-left text-md-right">
                        <div class="social-icons color-hover mt-10">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i> </a></li>
                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

<!-- jQuery -->
<script src="{{asset('dists/assets/vendor2/jquery/jquery.min.js')}}"></script>

<!-- Popper -->
<script src="{{asset('dists/assets/vendor2/js/popper.min.js')}}"></script>

<!-- bootstrap Core JavaScript -->
<script src="{{asset('dists/assets/vendor2/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Corenav Master JavaScript -->
<script src="{{asset('dists/assets/vendor2/corenav-master/coreNavigation-1.1.3.js')}}"></script>
<script src="{{asset('dists/assets/js/nav.js')}}"></script>

<!--carousel script -->
<script src="{{asset('dists/assets/vendor2/owlcarousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dists/assets/vendor2/owlcarousel/js/jquery.mousewheel.min.js')}}"></script>

<!-- nice-select -->
<script src="{{asset('dists/assets/vendor2/jquery-nice-select/jquery-nice-select.js')}}"></script>

<!-- custom JavaScript -->
<script src="{{asset('dists/assets/js/custom.js')}}"></script>

<!-- prettyPhoto -->
<script src="{{asset('dists/assets/vendor2/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>

<!-- custom JavaScript -->
<script src="{{asset('dists/assets/js/customizer.js')}}"></script>

<!-- template JavaScript -->
<script src="{{asset('dists/assets/js/template.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dists/assets/vendor2/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('dists/assets/js/revolution-slider.js')}}" type="text/javascript"></script>

<!--jarallax javascript -->
<script src="{{asset('dists/assets/js/jarallax.js')}}"></script>
<script src="{{asset('js/addons/addons.js')}}" type="text/javascript"></script>





</html>
