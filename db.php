<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db	= "mstv";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = " SELECT * FROM equipamentos";
$consulta_equipamentos = mysqli_query($conexao, $query);

$query = " SELECT * FROM eventos";
$consulta_eventos = mysqli_query($conexao, $query);

$query = " SELECT serviços.id_servico, equipamentos.nome_equipamento, equipamentos.tamanho, equipamentos.qntd_processadora, eventos.nome_evento, eventos.data_evento
			FROM equipamentos, eventos, serviços
			WHERE equipamentos.id_equipamento = serviços.id_equipamentos AND eventos.id_evento = serviços.id_eventos";
$consulta_servico = mysqli_query($conexao, $query);
