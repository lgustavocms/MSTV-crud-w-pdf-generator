<?php 

include 'db.php';

$id_equipamento = $_POST['escolha_equipamento'];
$id_evento = $_POST['escolha_evento'];

$query = "INSERT INTO serviços(id_equipamentos, id_eventos) VALUES($id_equipamento, $id_evento)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=servicos');
