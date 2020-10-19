<?php

$conexao = mysqli_connect('localhost:3308','root','','escola') or die('Erro ao conectar');


$query = "SELECT * FROM cursos";
$consulta_curso = mysqli_query($conexao, $query);

$query = "SELECT * FROM alunos";
$consulta_aluno = mysqli_query($conexao, $query);

$query =  "SELECT alunos_cursos.id_alunos_cursos, alunos.nome_aluno, cursos.nome_curso 
            FROM alunos, cursos, alunos_cursos
            WHERE alunos_cursos.id_aluno = alunos.id_aluno
            AND alunos_cursos.id_curso = cursos.id_curso";

$consulta_matricula = mysqli_query($conexao, $query);

?>