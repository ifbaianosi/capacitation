<html>
<head>
	<title>SisCap - IFBaiano</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
	<body>
	<div class="container">
		<h1>Mais informações:</h1>
		<table class="table table-striped table-bordered table-hover">
		<?php foreach($servidores as $p): ?>
		<tr>
			<td width="30%">Nome: </td>
			<td width="70%"><?= $p->nome.' '.$p->sobrenome ?></td>
		</tr>
		<tr>
			<td width="30%">Matrícula SIAPE: </td>
			<td width="70%"><?= $p->siape ?></td>
		</tr>
		<tr>
			<td width="30%">Cargo: </td>
			<td width="70%"><?= $p->cargo ?></td>
		</tr>
		<tr>
			<td width="30%">Data de entrada no serviço público:</td>
			<td width="70%"><?= $p->entrada ?></td>
		</tr>
		<tr>
			<td width="30%">Data de nascimento: </td>
			<td width="70%"><?= $p->datanascimento ?></td>
		</tr>
		<?php endforeach ?>
		</table>
		<a href="/">Início</a>
		</div>
	</body>
</html>
