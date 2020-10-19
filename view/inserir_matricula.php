<h1>Inserir Nova Matricula</h1>

<form action="view/nova_matricula.php" method="post">
<p>Selecione o aluno</p>
<select name="escolha_aluno">
<option>Selecione um aluno</option>
    
    <?php
    while($linha = mysqli_fetch_array($consulta_aluno)){
        echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
        
    }
    ?>
    </select>
    
    <p>Selecione um curso</p>
    <select name="escolha_curso">
    <option>Selecione um curso</option>
    <?php
    while($linha = mysqli_fetch_array($consulta_curso)){
        echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
    }
    ?>

<input type="submit" value="Matricular">
</select>
<br><br>

</form>