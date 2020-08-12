<?php

include 'db.php';

$id_evento = $_POST['id_evento'];
$nome_evento = $_POST['nome_evento'];
$data_evento = $_POST['data_evento'];

$query = "UPDATE eventos SET nome_evento='$nome_evento', data_evento='$data_evento' WHERE id_evento='$id_evento'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=eventos');
