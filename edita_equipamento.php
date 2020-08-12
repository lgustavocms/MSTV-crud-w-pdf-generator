<?php 

include 'db.php';

$id_equipamento = $_POST['id_equipamento'];
$nome_equipamento = $_POST['nome_equipamento'];
$tamanho = $_POST['tamanho'];
$qntd_processadora = $_POST['qntd_processadora'];


$query = "UPDATE EQUIPAMENTOS SET nome_equipamento='$nome_equipamento', tamanho='$tamanho', qntd_processadora = '$qntd_processadora' WHERE id_equipamento = $id_equipamento";

#print($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=equipamentos');
