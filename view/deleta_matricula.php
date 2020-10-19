<?php

include 'conexao.php';

$id_matricula = $_GET['id_alunos_cursos'];

$deletar = "DELETE FROM alunos_cursos WHERE id_alunos_cursos = $id_matricula";

mysqli_query($conexao, $deletar);

header('location:../index.php?pagina=matriculas');
?>