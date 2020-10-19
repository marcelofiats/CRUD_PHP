<a class="btn btn-success" href="?pagina=inserir_matricula">inserir nova matricula</a>
<table class="table table-hover table-striped" id="matricula">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Nome curso</th>
        </tr>
    </thead>

    <tbody>
        <?php
        
            while($linha = mysqli_fetch_array($consulta_matricula)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
                ?>
                <td><a href="view/alterar_matricula.php?id_alunos_cursos=<?php echo $linha['id_alunos_cursos'];?>"><i class="fas fa-user-edit"></i></a></td>
                <td><a href="view/deleta_matricula.php?id_alunos_cursos=<?php echo $linha['id_alunos_cursos'];?>"><i class="fas fa-user-times"></i></a></td></tr>
                    <?php
            }

            ?>
        </tbody>
    </table>
