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

	<section id="logos">
		<section class="logos_diflen">
			<picture class="logos_diflen__verde">
				<img src="<?php echo assetsurl; ?>/dist/imgs/logo-verde.png" alt="">
			</picture>
			<picture class="logos_diflen__cinza">
			<img src="<?php echo assetsurl; ?>/dist/imgs/logo-cinza.png" alt="">
			</picture>
		</section>
	</section>