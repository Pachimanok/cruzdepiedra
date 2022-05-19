<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Cruz de Piedra :: Inscripción</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard" />


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
        <a href="/cruzdepiedra/public/">
            <div class="logo-container">
                <a class="navbar-brand" href="/cruzdepiedra/public/">
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
                        <div class="card wizard-card" data-color="azure" id="wizardProfile">

                            <!-- You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
                            <div class="wizard-header text-center">
                                <h3 class="wizard-title">Ya estás inscripto en <br> {{ $actividad->titulo }}</h3>
                                <p class="category">Cuando hagas la transferencia por favor envianos el
                                    comprobante de la transferencia al mail cruzdepiedrasf@gmail.com</p>
                            </div>
                            <div class="wizard-navigation">
                                <div class="progress-with-circle">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1"
                                        aria-valuemax="3" style="width: 21%;"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#about" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-ticket"></i>
                                            </div>
                                            Transferencia
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h5 class="info-text">Envianos una transferencia a estos datos:</h5>
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p class="text-center text-secondary mt-5 pb-0 mb-0">
                                                CTA CTE $ BANCO GALICIA
                                                N 19479-4 081-7
                                                <br>ASOCIACIÓN CIVIL CULTURAL DE CUYO
                                                <br> CBU: <span id="p1"
                                                    style="font-weight: 600;">0070081820000019479475</span>
                                                <br>ALIAS: <span id="p2"
                                                    style="font-weight: 600;">RetirosCruzDePiedra</span>
                                                <br>
                                            </p>
                                            <br>
                                            <div class="d-flex text-center">
                                                <button class="btn btn-primary" onclick="copiarAlPortapapeles('p1')">
                                                    <p id="colorp1" style="margin:0;">Copiar CBU</p>
                                                </button>
                                                <button class="btn btn-primary" onclick="copiarAlPortapapeles('p2')">
                                                    <p id="colorp1" style="margin:0;">Copiar ALIAS</p>
                                                </button>
                                                <a class="btn btn-primary btn-fill" href="/">Terminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>.
                Free download <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
            </div>
        </div>
        <div class="fixed-plugin">

        </div>
    </div>

</body>
<script>
    function copiarAlPortapapeles(id_elemento) {
        var aux = document.createElement("input");
        aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        if (id_elemento == 'p1') {
            var cabs = document.querySelectorAll('#colorp1');
            cabs.forEach(function(v) {
                v.style.color = "#193b87"
            });
            swal("¡CBU copiado en tu telefono", "", "success");
        } else {
            var cabs = document.querySelectorAll('#colorp2');
            cabs.forEach(function(v) {
                v.style.color = "#193b87"
            });
            swal("¡Alias copiado en tu telefono", "", "success");
        }

    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
