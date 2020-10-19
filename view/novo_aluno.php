<?php

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

include 'conexao.php';

$inserir = "INSERT INTO alunos (nome_aluno, data_nascimento) VALUES ('$nome_aluno', '$data_nascimento')";

mysqli_query($conexao, $inserir);

header('location:http://localhost/CRUD/?pagina=alunos');

?>