<?php if(!isset($_GET['editar'])){?>

<form action="view/novo_aluno.php" method="post">
    <br>
    <label class="badge badge-secondary">Nome do Aluno:</label>
    <input class="form-control" type="text" name="nome_aluno" id="nome_aluno" placeholder="Digite o nome do aluno">
    <br><br>
    <label class="badge badge-secondary">Data de nascimento:</label>

    <input class="form-control" type="text" name="data_nascimento" id="data_nascimento" placeholder="Digite a data de nascimento">
    <br><br>
    <input type="submit" value="Inserir aluno"/>
</form>

<?php } else { ?>
     <?php while($linha = mysqli_fetch_array($consulta_aluno)){ ?>
        <?php if($linha['id_aluno'] == $_GET['editar']){ ?>

            <form action="view/edita_aluno.php" method="post">
                <br>
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'];?>">
                <label class="badge badge-secondary">Nome Aluno:</label>
                <input class="form-control" type="text" name="nome_aluno" id="nome_aluno"  value="<?php echo $linha['nome_aluno'];?>">
                <br><br>
                <label class="badge badge-secondary">Data de nascimento:</label>
                <input class="form-control" type="text" name="data_nascimento" id="data_nascimento" value="<?php echo $linha['data_nascimento'];?>">
                <br><br>
                <input type="submit" value="Editar aluno">
            </form>

         <?php } ?>
       <?php } ?>
    <?php } ?>