<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="http://oeduardoal.github.io/eduardoalmeida.ico">
	<?php wp_head(); ?>
	<meta name="theme-color" content="#000">
</head>
<body <?php body_class(); ?>>

	<header class="container-fluid">
		<section id="logos" class="row">
			<section class="logos_diflen col-12">
				<section class="logo_diflen logo_diflen_cinza">
					<img class="logo_diflen__cinza" src="<?php echo assetsurl; ?>/dist/imgs/logo-cinza.png" alt="">
				</section>
				<section class="logo_diflen">
					<img class="logo_diflen__verde" src="<?php echo assetsurl; ?>/dist/imgs/logo-verde.png" alt="">
				</section>
			</section>
		</section>
		<section id="data_evento" class="row">
			<section class="col-12">
				<h2>31 DE MAIO, 1 E 2 DE JUNHO</h2>
			</section>
		</section>
	</header>
	<section class="container-fluid" id="palestrantes">
		<section class="row">
		</section>
	</section>
	<section class="container-fluid" id="loading">
		<section class="row">
		</section>
	</section>
	<section class="container-fluid" id="local">
		<section class="row">
			<div class="col-12">
				<h5>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>LOCAL : </span>
					<span>AV.RECREIO, 840 - LAGOA REDONDA</span>
				</h5>
			</div>
		</section>
	</section>
	<section class="container-fluid" id="inscrevase">
		<section class="row">
			<a href="" class="btn btn-outline-success btn-block">INSCREVA-SE</a>
		</section>
	</section>