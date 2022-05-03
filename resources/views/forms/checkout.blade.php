<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Cruz de Piedra :: </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard" />

    {{-- icons Google --}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description"
        content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
    <meta property="og:description"
        content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- CSS Files -->
    <link href="{{ asset('wizard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('wizard/assets/css/paper-bootstrap-wizard.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('wizard/assets/css/demo.css') }}" rel="stylesheet" />

    <!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('wizard/assets/css/themify-icons.css') }}" rel="stylesheet">

</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('../../assets/img/Cruz de Piedra.png')">
        <!--   Creative Tim Branding   -->
        <a href="/">
            <div class="logo-container">
                <a class="navbar-brand" href="/">
                    Cruz de Piedra
                </a>
            </div>
        </a>
        <!--  Made With Paper Kit  -->
        <a href="https://demos.creative-tim.com/paper-kit" class="made-with-pk">
            <div class="brand"><i class="ti-headphone-alt"></i></div>
            <div class="made-with">Necesito <strong>Ayuda</strong></div>
        </a>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            {{-- <form action="/inscripcion" method="POST">
                            @csrf --}}
                            <!-- You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
                            <div class="wizard-header text-center">
                                <h1 class="text-center text-success"><span class="material-icons"
                                        style="font-size: 8rem;">
                                        check_circle_outline
                                    </span></h1>
                                <h3 class="text-bold text-center">{{ $nombre }},</h3>
                                <h3 class="wizard-title">Te has inscripto correctamente a @if ($actividad->tipo == 'convivencia')
                                        la
                                    @else
                                        el
                                    @endif {{ $actividad->titulo }}</h3>
                            </div>
                            <div class="tab-content "
                                style="padding-top: 1rem;padding-left: 10vw; padding-right: 10vw; ">

                                @if ($actividad->estado == 'llena')
                                    <h5 class="info-text">

                                        Estas en la lista de espera. <br>
                                        Cuando se libere un cupo nos comunicaremos con vos para que
                                        puedas continuar con el procesos de Pago.
                                    </h5>
                                @else
                                    <h5 class="info-text">{{ $actividad->descripcion }} <br>
                                        Comienza el {{ $actividad->FechaInicio }} a las
                                        {{ $actividad->horaInicio }} <br>
                                        Termina el {{ $actividad->FechaFin }} a las
                                        {{ $actividad->horaFin }} <br> </h5>

                                    <h4 class="text-center">Por Cualquier inconveniente te dejamos tu
                                        numero de ficha:</h4>
                                    <h1 class="text-center text-info">{{ $actividad->id }}</h1>
                                    <p class="text-center"><small>Te servira para cualquie reclamo o para
                                            ayudar a los organizadores.</small></p>
                                    </h5>
									<div class="row text-center">
										@if($pago == 'efectivo')
										<button type='button' class='btn btn-success mx-auto ' name='previous'
											value='Previous'>Ok, Terminar </button>
										@elseif($pago == 'trasferencia')
											datos transferencias
										@elseif($pago == 'tuCuota')
										<button type='button' class='btn btn-success mx-auto ' name='previous'
											value='Previous'>Ir a TuCuota</button>
										@elseif($pago == 'mercadoPago')
										<button type='button' class='btn btn-primary mx-auto ' name='previous'
											value='Previous'>Ir a MercadoPago</button>
										@elseif($pago == 'combo')
										<button type='button' class='btn btn-danger mx-auto ' name='previous'
											value='Previous'>Ir a Pagar</button>
										@endif
									</div>
                                @endif
                                
                            </div>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>.
                Free
                download <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
            </div>
        </div>
        <div class="fixed-plugin">

        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="{{ asset('wizard/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('wizard/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('wizard/assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('wizard/assets/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('wizard/assets/js/paper-bootstrap-wizard.js') }}" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="{{ asset('wizard/assets/js/jquery.validate.min.js') }}" type="text/javascript"></script>

</html>
