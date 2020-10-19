<a class="btn btn-success" href="?pagina=inserir_alunos">Inserir Novo Aluno</a>
<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
        <th>Nome Aluno:</th>
        <th>Data de nascimento:</th>
        <th>Editar</th>
        <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
    <?php
    while($linha = mysqli_fetch_array($consulta_aluno)){
        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
        <td><a href="?pagina=inserir_alunos&editar=<?php echo $linha['id_aluno'];?>"><i class="fas fa-user-edit"></i></a></td>
        <td><a href="view/deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>"><i class="fas fa-user-times"></i></a></td></tr>
            <?php
    }
    ?>
    </tbody>
</table>
