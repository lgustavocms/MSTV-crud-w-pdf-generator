<?php 

include 'db.php';

$nome_equipamento = $_POST['nome_equipamento'];
$tamanho = $_POST['tamanho'];
$qntd_processadora = $_POST['qntd_processadora'];

$query = "INSERT INTO equipamentos(nome_equipamento, tamanho, qntd_processadora) VALUES('$nome_equipamento', '$tamanho', '$qntd_processadora')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=equipamentos');
