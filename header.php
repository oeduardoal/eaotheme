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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115318800-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115318800-1');
</script> -->

</head>

<body <?php body_class(); ?>>

	<?php
		get_template_part( "includes/menu", "tpl" );
		get_template_part( "includes/banner", "tpl" );
		get_template_part( "includes/video", "tpl" );
		get_template_part( "includes/mensagem-dcf", "tpl" );
		get_template_part( "includes/contagem", "tpl" );
		//  
		get_template_part( "includes/detalhes", "tpl" );
		get_template_part( "includes/convidados", "tpl" );
		get_template_part( "includes/bandas", "tpl" );
		get_template_part( "includes/perguntas", "tpl" );
		get_template_part( "includes/caravanas", "tpl" );
		get_template_part( "includes/hospedagem", "tpl" );
		get_template_part( "includes/fotos", "tpl" );
		get_template_part( "includes/contato", "tpl" );
	?>
