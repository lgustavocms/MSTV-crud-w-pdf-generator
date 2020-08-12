<?php
 
 include 'db.php';

$nome_evento = $_POST['nome_evento'];
$data_event = $_POST['data_evento'];

$query = "INSERT INTO eventos(nome_evento, data_evento) VALUES ('$nome_evento', '$data_evento')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=eventos');
