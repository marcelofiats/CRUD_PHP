<h1 style="text-align:center">Bem vindos a Dog cursos</h1>

<form action="login.php" method="post">
    <label class="badge badge-secondary">Usuário</label>
    <input type="text" name="usuario" id="usuario" placeholder="Nome de usuário" class="form-control">
    <br>
    <label class="badge badge-secondary">Senha</label>
    <input type="password" name="senha" id="senha"placeholder="Digite a senha" class="form-control">
    <br>
    <input type="submit" value="Entrar" class="btn btn-success">

</form>
<br>
<?php
if(isset($_GET['erro'])){ ?>

    <div class="alert alert-danger" role="alert">
    login e/ou senha errados...
    </div>
<?php } ?>


<!-- x' or 1=1 or 'x-->
