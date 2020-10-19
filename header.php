<!DOCTYPE html>
<html>
<head>
<title>DogCurso</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script src="https://kit.fontawesome.com/9f732d3a49.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="logo" alt="logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matriculas</a>
                <?php if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair)</a>
                <?php } ?>

            </div>
        </div>
    </header>

    <div id="conteudo" class="container">



