<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cruz de Piedra :: Inscripción</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

   
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
    <meta property="og:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
    <meta property="og:site_name" content="Creative Tim" />

	<!-- CSS Files -->
    <link href="{{asset('wizard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('wizard/assets/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{asset('wizard/assets/css/demo.css')}}" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{asset('wizard/assets/css/themify-icons.css')}}" rel="stylesheet">
	
	</head>
	<body>
	<div class="image-container set-full-height" style="background-image: url('../../assets/img/Cruz de Piedra.png')">
	    <!--   Creative Tim Branding   -->
	    <a href="/">
	         <div class="logo-container">
                <a class="navbar-brand" href="/" >
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
		                    <form action="/inscripcion" method="POST">
                            @csrf
		                <!-- You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Inscripción a {{ $actividad->titulo}}</h3>
									<p class="category">{{ $actividad->descripcion}} del {{ $actividad->FechaInicio}} al {{ $actividad->FechaFin}}</p>
                                    @if($actividad->estado == 'llena')<span class="label label-warning">Lista de Espera</span>@endif
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Datos
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-notepad"></i>
												</div>
												Notas
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-money"></i>
												</div>
												Pago
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Complete sus datos:</h5>
											<div class="col-sm-8 col-sm-offset-2">
												<div class="form-row">
													<div class="form-group col-sm-6" style="padding-left:0; " >
														<label>Nombre<small>*</small></label>
														<input name="nombre" type="text" class="form-control" placeholder="Nombres">
													</div>
													<div class="form-group col-sm-6 ml-1" style="padding: 0">
														<label>Apellido <small>*</small></label>
														<input name="apellido" type="text" class="form-control" placeholder="Apellido">
													</div>
												</div>
												<div class="form-group">
													<label>Telefono de Contacto <small>*</small></label>
													<input name="phone" type="phone" class="form-control" placeholder="261000000">
												</div>
												<div class="form-group">
													<label>Email <small>*</small></label>
													<input name="email" type="email" class="form-control" placeholder="tunombre@dominio.com">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h5 class="info-text"> Notas de mi inscripción: </h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
                                                <div class="form-group">
													<label>día que llega: <small>*</small></label>
													<input name="llega" type="text" class="form-control" placeholder="Indique día y hora de llegada">
												</div>
                                                <div class="form-group">
													<label>DNI - CUIL - Pasaporte: <small>*</small></label>
													<input name="facturacion" type="text" class="form-control" placeholder="Para factruarle">
												</div>
                                                <div class="form-group">
													<label>Dieta Espercial: <small></small></label>
													<input name="dieta" type="text" class="form-control" placeholder="Indique tipo de Regimen">
												</div>
                                                <div class="form-group">
													<label>Observaciones: <small></small></label>
													<textarea name="observaciones"  class="form-control" placeholder="Algun comentario de utilidad"></textarea>
												</div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Como desea Pagar?</h5>
		                                    </div>
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p class="text-center">Total:</p>
												<input type="hidden" value="{{ $actividad->id}}" name='id_actividad'>
                                                <h1 class="text-center text-success" style="font-size: 6rem; font-weight: 700;">$ {{$actividad->precio}}</h1>
		                                        <input type="hidden" name="total_pago" value="{{$actividad->precio}}">
                                                <div class="form-group">
		                                            <label>Country</label><br>
		                                            <select name="pago[]" class="form-control" required>
		                                                <option value="">Elegir una Opcion</option>
		                                                <option value="efectivo"> Efectivo </option>
		                                                <option value="transferencia"> Transferencia </option>
		                                                <option value="tuCuota"> TuCuota </option>
		                                                <option value="mercadoPago"> MercadoPago</option>
		                                                <option value="combo">Combo </option>
		                                            </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd'  value='Terminar' />
		                            </div>
		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>. Free download <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
	        </div>
	    </div>
		<div class="fixed-plugin">
			
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('wizard/assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('wizard/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('wizard/assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('wizard/assets/js/demo.js')}}" type="text/javascript"></script>
	<script src="{{asset('wizard/assets/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{asset('wizard/assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>
