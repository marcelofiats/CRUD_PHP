<?php

include "view/conexao.php";

$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);


$valida = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao, $valida);

if(mysqli_num_rows($consulta) > 0){
    session_start();
    
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

    header('location:index.php');
}
else{
    
   header('location:index.php?erro');
}