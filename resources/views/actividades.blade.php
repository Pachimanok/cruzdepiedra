<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cruz de Piedra :: @if($ruta == 'mujeres') Actividades Mujeres @else Actividades Hombres @endif
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/paper-kit.css?v=2.2.0')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/rail.css')}}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css" rel="stylesheet')}}" />

  {{-- Icons FontAwersome --}}
  {{-- <script src="https://kit.fontawesome.com/b32d080cf9.js" crossorigin="anonymous"></script> --}}
  <script src="https://kit.fontawesome.com/c3e5285436.js" crossorigin="anonymous"></script>
</head>
<body class="index-page sidebar-collapse">
  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg fixed-top" >
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
                Cruz de Piedra
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-center" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/#about">
                        Acerca de
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#galeria">
                        Galeria
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-placement="bottom" href="/actividades?act=mujeres">
                        Actividades para mujeres
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/actividades?act=hombres">
                        Actividades para Hombres
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://tucuota.com/checkout/4553cee0-cae9-11ec-a1f6-e7cc71c22548#fidkdWxOYHwnPyd1blppbHNgWks0Q2QzRFZ%2Ff0xiTGxCbDU1XFJHPGZfUWt%2FUzIzNUBHXW8yfWFMcWBzU31rZnRsZzAzajxmb1J1PENdQXF%2FczZUPGpCVFRANFVtVX9PNWw0czVGM1x8MVZXMnVAN0BRRmxpbHAnKSdpbGtuTGEnPydgZGM0NzVjNShmZGA9KDQ0YGYoPGNjMyg8ZzEyMTQ3PWYwN2cneA" class="btn btn-danger btn-round">Donar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



  
  <!-- End Navbar -->

  <div class="main">
    <section class="section pb-5" style="height: 100vh;">
        <div class="container text-center mt-5 ">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="title">
                <h3>@if($ruta == 'mujeres') Actividades para Mujeres @else Actividades para Hombres @endif</h3>
              </div>
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <ul id="tabs" class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Retiros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Convivencias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Otros</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="my-tab-content" class="tab-content text-center">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <table class="table table-striped">
                    <tbody>
                      @foreach ($ret as $ret)
                        <tr>
                          <th scope="row">{{ $ret->id}}</th>
                          <td>{{$ret->titulo}}</td>
                          <td>{{ $ret->FechaInicio}} hasta {{ $ret->FechaFin}}</td>
                          @if($ret->estado == 'abierta')
                            
                          <td><a href="/inscripcion/create?id={{ $ret->id}}" class="btn btn-outline-success btn-sm text-success">inscribirme</a></td>
                            
                          @elseif($ret->estado == 'llena')
                            
                          <td><a href="/inscripcion/create?id={{ $ret->id}}" class="btn btn-outline-warning btn-sm text-warning"  data-toggle="tooltip" data-placement="top" title="Inscribirme en Lista de Espera">l. espera</a></td>
                            
                          @else
                          <td><a class="btn btn-outline-danger btn-sm text-danger" data-toggle="tooltip" data-placement="top" title="La actividad cerrada" >Cerrado</a></td>
                          @endif
                        </tr>
                      @endforeach
                    </tbody>
                    
                  </table>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                  <table class="table table-striped">
                    <tbody>
                      @foreach ($conv as $conv)
                        <tr>
                          <th scope="row">{{ $conv->id}}</th>
                          <td>{{$conv->titulo}}</td>
                          <td>{{ $conv->FechaInicio}} hasta {{ $conv->FechaFin}}</td>
                          @if($conv->estado == 'abierta')
                            
                          <td><a href="/inscripcion/create?id={{ $ret->id}}" class="btn btn-outline-success btn-sm text-success">inscribirme</a></td>
                            
                          @elseif($conv->estado == 'llena')
                            
                          <td><a href="/inscripcion/create?id={{ $ret->id}}" class="btn btn-outline-warning btn-sm text-warning"  data-toggle="tooltip" data-placement="top" title="Inscribirme en Lista de Espera">l. espera</a></td>
                            
                          @else
                          <td><a class="btn btn-outline-danger btn-sm text-danger" data-toggle="tooltip" data-placement="top" title="La actividad cerrada" >Cerrado</a></td>
                          @endif
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                  <table class="table table-striped">
                    <tbody>
                      @foreach ($otros as $otro)
                        <tr>
                          <th scope="row">{{ $otro->id}}</th>
                          <td>{{$otro->titulo}}</td>
                          <td>{{ $otro->FechaInicio}} hasta {{ $otro->FechaFin}}</td>
                          @if($otro->estado == 'abierta')
                            
                          <td><a href="/inscripcion/create?id={{ $ret->id}}" class="btn btn-outline-success btn-sm text-success">inscribirme</a></td>
                            
                          @elseif($otro->estado == 'llena')
                            
                          <td><a href="/inscripcion/create?id={{ $ret->id}}" class="btn btn-outline-warning btn-sm text-warning"  data-toggle="tooltip" data-placement="top" title="Inscribirme en Lista de Espera">l. espera</a></td>
                          @else
                          <td><a class="btn btn-outline-danger btn-sm text-danger" data-toggle="tooltip" data-placement="top" title="La actividad cerrada" >Cerrado</a></td>
                          @endif
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </section>
    
      <section class="section pt-0 bg-dark" id="contacto">
        <div class="section bg-dark"  id="carousel">
        <div class="container">
          <h2 class="text-center text-white mb-5">Contactanos</h2>
          <form class="col-sm-9 mx-auto">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="text-danger" style="font-weight: 500;"for="inputEmail4">Nombre y Apellido:</label>
                <input type="name" class="form-control" id="inputEmail4" placeholder="Nombre y Apellido">
              </div>
              <div class="form-group col-md-6">
                <label class="text-danger" style="font-weight: 500;"for="inputEmail4">Celular:</label>
                <input type="phone" class="form-control" id="inputEmail4" placeholder="2612128105">
              </div>
            </div>
            <div class="form-row">

            <div class="form-group col-md-6">
              <label class="text-danger" style="font-weight: 500;" for="inputAddress">Email</label>
              <input type="email" class="form-control" id="inputAddress" placeholder="juan@mendoza.com.ar">
            </div>
            <div class="form-group col-md-6">
              <label class="text-danger" style="font-weight: 500;" for="inputAddress">Seccion</label>
              <select name="seccion[]" id="" class="form-control">
                <option value="">Elegir una Seccion</option>
                <option value="Varones">Seccion Varones</option>
                <option value="Mujeres">Seccion Mujeres</option>

              </select>
            </div>
            </div>

            <div class="form-group">
              <label class="text-danger" style="font-weight: 500;" for="inputAddress2">Asunto:</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Descripción corta del Mensaje">
            </div>
            <div class="form-group">
              <label class="text-danger" style="font-weight: 500;" for="inputAddress2">Mensaje:</label>
              <textarea name="" id="" placeholder="Contenido del Mensaje..." class="form-control"cols="30" rows="10"></textarea>
            </div>
            <div class="col-sm-5 mx-auto mt-4">
              <button type="submit" class="btn btn-danger w-100">Enviar</button>
            </div>
          </form>
        </div>
        </div>
    </section>
    @include('landingPage.footerEstetica')

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
    </script>
</body>

</html>
