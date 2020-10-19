<?php

include 'conexao.php';

$id_curso = $_GET['id_curso'];

$deletar = "DELETE FROM CURSOS WHERE id_curso = $id_curso";

mysqli_query($conexao, $deletar);

header('location:../index.php?pagina=cursos');
?>