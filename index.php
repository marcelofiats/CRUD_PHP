<?php

session_start();

include 'view/conexao.php';

#cabeçalho
include 'header.php';

if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    } 
    else{
        $pagina = 'cursos';
    }
}
else{
    $pagina = 'home';
}

switch($pagina){
    case 'cursos': include 'view/cursos.php'; break;
    case 'alunos': include 'view/alunos.php'; break;
    case 'inserir_curso': include 'view/inserir_curso.php'; break;
    case 'inserir_alunos': include 'view/inserir_alunos.php'; break;
    case 'inserir_matricula':'view/inserir_matricula.php'; break;
    case 'matriculas':include 'view/matricula.php'; break;
    default: include 'view/home.php'; break;
}

#rodape
include 'footer.php';
