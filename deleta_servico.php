<?php 

include 'db.php';

$id_servico = $_GET['id_servico'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE id_servico = $id_servico";

mysqli_query($conexao, $query);

header('location:index.php?pagina=servicos');
