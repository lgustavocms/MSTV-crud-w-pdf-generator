<?php 

include 'db.php';

$id_evento = $_GET['id_evento'];

$query = "DELETE FROM eventos WHERE id_evento = $id_evento";

mysqli_query($conexao, $query);

header('location:index.php?pagina=eventos');
