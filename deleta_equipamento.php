<?php 

include 'db.php';

echo $_GET['id_equipamento'];

$id_equipamento = $_GET['id_equipamento'];

$query = "DELETE FROM equipamentos WHERE id_equipamento = $id_equipamento";

mysqli_query($conexao, $query);

header('location:index.php?pagina=equipamentos');
