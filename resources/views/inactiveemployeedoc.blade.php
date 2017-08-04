<!-- IFBaiano Campus Santa Inês -->
<!-- Em 21 - 07 - 2017 -->
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="IFBaiano Servidor Sistema Capacitação">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style-rtl.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body class="rtl">
<section id="ext_menu-5">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <span class="navbar-logo"><span class="socicon socicon-buffer mbr-iconfont mbr-iconfont-menu"></span></span>
                        <a class="navbar-caption text-white" href="/" title="Início">SisCap</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>
					<ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item dropdown open"><a class="nav-link link dropdown-toggle" href="#" aria-expanded="true" data-toggle="dropdown-submenu">Informações Públicas</a><div class="dropdown-menu"><div class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Servidores<br></a><div class="dropdown-menu dropdown-submenu"><div class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Docentes</a><div class="dropdown-menu dropdown-submenu"><a class="dropdown-item" href="/docservidores">Em Atividade</a><a class="dropdown-item" href="/docinativos">Afastados</a></div></div><div class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Técnicos Administrativos</a><div class="dropdown-menu dropdown-submenu"><a class="dropdown-item" href="taeservidores">Efetivos</a><a class="dropdown-item" href="taeinativos">Afastados</a></div></div><a class="dropdown-item" href="#" aria-expanded="true">Aniversariantes do mês</a></div></div><a class="dropdown-item" href="#" aria-expanded="true">Solicitações de Veículos</a><a class="dropdown-item" href="#" aria-expanded="true">Planilhas e Relatórios</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="/">LOGIN</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="http://www.ifbaiano.edu.br/unidades/santaines/" target="_blank">IF Baiano</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>
</section>
<section class="mbr-section article" id="msg-box3-b" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">IF Baiano</h3>
					<p>&nbsp;</p>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
			<div class="list-group-item" align="center">
				<h4 class="list-group-item">
						Docentes Afastados
				</h4>
			</div>
				<?php $qntEmployee = 0; ?>
				<?php foreach($employee as $e): ?>
				<div class="list-group-item" align="left">
					<h5 class="list-group-item list-group-item-danger">
						Nome: <?= $e->name; ?> <?= $e->surname; ?>
					</h5>
					<p class="list-group-item" align="left">
						<?php 
							//$day = ($e->birth[8].$e->birth[9]);
							$month = ($e->birth[5].$e->birth[6]);
							$year = ($e->birth[0].$e->birth[1].$e->birth[2].$e->birth[3]);
							switch($month){
								case $month == 1: $strMonth = "janeiro"; break;
								case $month == 2: $strMonth = "fevereiro"; break;
								case $month == 3: $strMonth = "março"; break;
								case $month == 4: $strMonth = "abril"; break;
								case $month == 5: $strMonth = "maio"; break;
								case $month == 6: $strMonth = "junho"; break;
								case $month == 7: $strMonth = "julho"; break;
								case $month == 8: $strMonth = "agosto"; break;
								case $month == 9: $strMonth = "setembro"; break;
								case $month == 10: $strMonth = "outubro"; break;
								case $month == 11: $strMonth = "novembro"; break;
								case $month == 12: $strMonth = "dezembro"; break;
								default: " ";
							}
						?>
						Data de nascimento <?= $e->birth[8].$e->birth[9].' de '.$strMonth.' de '.$year;?></br>
						Currículo Lattes <img src="assets/glyphicons_free/glyphicons/png/glyphicons-501-education.png"></br>
						E-mail <a href="mailto:<?= $e->email; ?>"><img src="assets/glyphicons_free/glyphicons/png/glyphicons-11-envelope.png" title="<?= $e->name; ?>"></a></br>
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</p>
				</div>
				<?php $qntEmployee++ ?>
				<?php endforeach ?>	
				<div class="list-group-item">
				</div> <a class="list-group-item"><span class="badge">Quantidade: <?= $qntEmployee ?> </span></a>
			</div>
		</div>
	</div>
</div>
                <div><p>&nbsp;</p><a class="btn btn-secondary" href="http://www.ifbaiano.edu.br/unidades/santaines/" target="_blank">Instituto Federal de Educação, Ciência e Tecnologia Baiano</a></div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-c" style="background-color: rgb(239, 239, 239); padding-top: 1.75rem; padding-bottom: 2.625rem;">
    
    <div class="container">
        <p class="text-xs-center">Rodovia Santa Inês - Ubaíra. &nbsp;:: . Zona Rural.</p>
    </div>
</footer>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>
