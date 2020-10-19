<?php

include 'conexao.php';

$aluno = $_GET['id_aluno'];

$deletar = mysqli_query($conexao,"DELETE FROM ALUNOS WHERE id_aluno = $aluno");

header("location:../index.php?pagina=alunos");

?>