	<?php

	include 'db.php';
	include 'header.php';

	if (isset($_GET['pagina'])) {
		$pagina=$_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}

	switch ($pagina) {
		case 'contratos': include 'views/contratos.php';
			break;
		case 'eventos': include 'views/eventos.php';
			break;
		case 'equipamentos': include 'views/equipamentos.php';
			break;
		case 'servicos': include 'views/servicos.php';
			break;
		case 'inserir_equipamento': include 'views/inserir_equipamento.php';
			break;
		case 'inserir_evento': include 'views/inserir_evento.php';
			break;
		case 'inserir_servico': include 'views/inserir_servico.php';
		default: include 'views/home.php';
			break;
	}

	include 'footer.php';
