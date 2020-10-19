<?php if(!isset($_GET['editar'])){ ?>

<form action="view/novo_curso.php" method="post">
    <br>
    <h2>Inserir novo curso</h2>
    <label class="badge badge-secondary">Nome Curso:</label>
    <input class="form-control"type="text" name="nome_curso" id="nome_curso" placeholder="Digite o nome do curso">
    <br><br>
    <label class="badge badge-secondary">Carga Horária:</label>

    <input class="form-control" type="text" name="carga_horaria" id="carga_horaria" placeholder="Digite a carga horaria">
    <br><br>
    <input type="submit" value="Inserir Curso">
</form>

<?php }else{ ?>
    <?php while($linha = mysqli_fetch_array($consulta_curso)){ ?>
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>

            <form action="view/edita_curso.php" method="post">
                <br>
                <h2>Editar Curso</h2>
                <label class="badge badge-secondary">Nome Curso:</label>
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso'];?>">
                <input class="form-control" type="text" name="nome_curso" id="nome_curso" value="<?php echo $linha['nome_curso'];?>">
                <br><br>
                <label class="badge badge-secondary">carga Horaria:</label>

                <input class="form-control" type="text" name="carga_horaria" id="carga_horaria" value="<?php echo $linha['carga_horaria'];?>">
                <br><br>
                <input type="submit" value="Alterar Curso">
            </form>

                <?php } ?>
            <?php } ?>
        <?php } ?>