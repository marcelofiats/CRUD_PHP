<?php

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

include 'conexao.php';

$inserir = "INSERT INTO cursos (nome_curso, carga_horaria) VALUES ('$nome_curso', $carga_horaria)";

mysqli_query($conexao, $inserir);

header('location:http://localhost/CRUD/?pagina=cursos');

?>