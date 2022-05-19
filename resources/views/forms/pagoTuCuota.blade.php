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
	    <a href="/cruzdepiedra/public/">
	         <div class="logo-container">
                <a class="navbar-brand" href="/cruzdepiedra/public/" >
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
		                    <form action="/cruzdepiedra/public/tuCuota" method="POST">
                            @csrf
		                <!-- You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->
		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Pago por medio de {{$actividad->titulo}}</h3>
									<p class="category">Se puede pagar haste en 6 cuotas sin Interes con tarjeta de Credito o Debito.
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-credit-card"></i>
												</div>
												Crédito o Débito
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Complete los datos de su Tarjeta:</h5>
											<div class="col-sm-8 col-sm-offset-2">
												<input type="hidden" name="customer_id" value="{{ $customerId}}">
												<input type="hidden" name="description" value="{{$actividad->titulo}}">
												<input type="hidden" name="amount" value="{{$actividad->precio}}">

												<div class="form-group">
													<label>NUMERO DE TARJETA<small>*</small></label>
														<div class="form-group has-success">
															<input type="number" name="payment_method_number" class="form-control" minlength="16" placeholder="Indique los 16 n[umeros de la tarjeta" />
															<small style="color:gray;">Medios de pago disponibles: CBU, naranja-visa, Visa Crédito, Visa Débito, ArgenCard, Cencosud, CMR Falabella, Cordobesa, Diners Club, JCB, Líder, Maestro, Mastercard, Mastercard Debit, Nativa</small>
														</div>
												</div>
												<div class="form-group">
		                                            <label>Cantidad Cuotas</label><br>
		                                            <select name="count[]" class="form-control" required>
		                                                <option value="">Elegir la cantidad de cuotas</option>
		                                                <option value="1">1 Cuota de {{ number_format($actividad->precio / 1,2)}}</option>
		                                                <option value="2">2 Cuotas de {{ number_format($actividad->precio / 2,2)}}</option>
		                                                <option value="3">3 Cuotas de {{ number_format($actividad->precio / 3,2)}}</option>
		                                                <option value="4">4 Cuotas de {{ number_format($actividad->precio / 4,2)}}</option>
		                                                <option value="5">5 Cuotas de {{ number_format($actividad->precio / 5,2)}}</option>
		                                                <option value="6">6 Cuotas de {{ number_format($actividad->precio / 6,2)}}</option>
		                                                <option value="7">7 Cuotas de {{ number_format($actividad->precio / 7,2)}}</option>
		                                                <option value="8">8 Cuotas de {{ number_format($actividad->precio / 8,2)}}</option>
		                                            </select>
		                                        </div>
											</div>
										</div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd'  value='Pagar' />
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
