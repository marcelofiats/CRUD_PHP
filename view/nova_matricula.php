<?php
$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

include 'conexao.php';

$inserir = "INSERT INTO alunos_cursos(id_aluno, id_curso) VALUES ('$id_aluno','$id_curso')";

if(mysqli_query($conexao, $inserir))
{
    echo 'inserido com sucesso...';
    header('location:http://localhost/CRUD/?pagina=matriculas');
}else{
    echo'falha na matricula';
}




?>
