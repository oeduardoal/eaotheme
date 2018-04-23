
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
		<section class=" d-flex d-sm-flex justify-content-sm-center justify-content-center flex-sm-row flex-column ">
			<?php
				$palestrantes = array(
					1 => array("class" => "andres"),
					2 => array("class" => "lipao"),
					3 => array("class" => "teo"),
					4 => array("class" => "luma"),
					5 => array("class" => "rebeca"),
// 					6 => array("class" => "sandro"),
				);
				foreach ($palestrantes as $key => $value):
					$class = $value['class'];
					$src = assetsurl . "/dist/imgs/0".$key."-min.png"; 
			?>
			<section class="palestrante__perfil <?= $class ?>">
					<a href="#">
						<img src="<?= $src ?>" alt="">
					</a>
			</section>
			<?php
				endforeach;
			?>
		</section>
	</section>
	<section class="container-fluid" id="loading">
		<div class="d-flex justify-content-center flex-row">
			<div class="col-md-5 col-sm-12">
				<h3>LOADING... PLEASE WAIT</h3>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid" id="local">
		<section class="row">
			<div class="col-12">
				<h5>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>LOCAL : </span>
					<span>AV.RECREIO, 840 - LAGOA REDONDA</span>
					<br/>
					<br/>
					<span style="padding-top: 1rem;" class="travmor">
						PRECISA DE HOSPEDAGEM? PROCURE A <strong> <a target="_new" href="https://instagram.com/travmor.company">TRAVMOR</a> <a href="tel:085981890990">(85) 98189-0990</a></strong> 
					</span>
				</h5>
			</div>
		</section>
	</section>
	<section class="container-fluid" id="inscrevase">
		<section class="row">
			<a href="https://www.eventbrite.com.br/e/diflen-conference-fortaleza-2018-tickets-43478596653" target="_blank" class="btn btn-outline-success btn-block">INSCREVA-SE</a>
		</section>
	</section>