<html>
	<body>
	<h2>Servidor</h2>
	<ul>
		<?php foreach($employee as $e): ?>
		<li> Nome: <?= $e->name; ?> <?= $e->surname; ?></li>
		<li> SIAPE: <?= $e->siape; ?> </li>
		<li> Cargo: <?= $e->office; ?> </li>
		<?= 
			$month = ($e->birth[5].$e->birth[6]);
			switch($month){
				case $month == 3: $strMonth = "março"; break;
				case $month == 11: $strMonth = "novembro"; break;
				default: " ";
			}
		?>
		<li> Data de nascimento: <?= $strMonth; ?></li>
		<li> Entrada em atividade: <?= $e->entry_service; ?></li>
		<li> Saída de atividade: <?= $e->out_service; ?></li>
		<li> Anotações:</li>
		<hr width=200 size=3 align="left" noshade>
		<p>&nbsp;</p>
		<?php endforeach ?>
	</ul>
	</body>
</html>