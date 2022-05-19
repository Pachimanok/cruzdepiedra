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

		@php
		// SDK de Mercado Pago
		require base_path('/vendor/autoload.php');
		// Agrega credenciales
		MercadoPago\SDK::setAccessToken('TEST-1782908899890379-092218-82bf271f7189f4eb1668ac84bc73f0ea-33894200');
		
		// Crea un objeto de preferencia
		$preference = new MercadoPago\Preference();
		
		// Crea un ítem en la preferencia
		$item = new MercadoPago\Item();
		$item->title = $actividad->titulo;
		$item->quantity = 1;
		$item->unit_price = $actividad->precio;
		$preference->items = array($item);
		
		$preference->back_urls = array(
			"success" => "https://cincosentidos.ar/mp",
			"failure" => "http://cincosentidos.ar/mp",
			"pending" => "http://cincosentidos.ar/mp"
		);
		$preference->auto_return = "approved";
		$preference->save();
		
		@endphp
		<script src="https://sdk.mercadopago.com/js/v2"></script>
		<script>
			// Agrega credenciales de SDK
			  const mp = new MercadoPago('TEST-624bfaab-1ca5-4d31-853b-c3e09a2b1849', {
					locale: 'es-AR'
			  });
			
			  // Inicializa el checkout
			  const checkout = mp.checkout({
				  preference: {
					  id: '{{$preference->id}}'
				  },
				  autoOpen: true,
				  
			});
			</script>
			
		
    
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
