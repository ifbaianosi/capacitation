<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="IFBaiano Santa Inês Servidores">
<link href="/css/app.css" rel="stylesheet">
<title>SisCap - Lista de Servidores</title>
</head>
<body>
	<table class="table">
					<?php $qntEmployee = 0; ?>
				<?php foreach($employee as $e): ?>
				<div class="list-group-item" align="left">
					<h5 class="list-group-item list-group-item-success">
						Nome: <?= $e->name; ?> <?= $e->surname; ?>
					</h5>
					<p class="list-group-item" align="left">
						SIAPE: <?= $e->siape; ?> </br>
						Cargo: <?= $e->office; ?> </br> 
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
						Data de nascimento: <?= $e->birth[8].$e->birth[9].' de '.$strMonth.' de '.$year; ?> </br>
						Lattes: </br>
						E-mail: </br>
						Informações adicionais:	<?= "<b>".$e->annotation."</b>"; ?></br>
					</p>
				</div>
				<?php $qntEmployee++ ?>
				<?php endforeach ?>	
	</table>
</body>
</html>