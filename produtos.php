<?php include "cabecalho.php"; ?>

<div class="card">
    <div class="card-header">
        Lista de Produtos
    </div>    
    <div class="card-body">
        <form action="produtos.php" method="get">
            <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-success" href="novo_produto.php">
                            Cadastrar Produto
                        </a>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" name="consulta" type="text" />
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">
                            Pesquisar
                        </button>
                    </div>
            </div><!--Fechamento do row -->
        </form>
    </div><!--Fechamento do card-body -->
</div><!--Fechamento do card -->

<?php
        include "conexao.php";
        $sql = "SELECT Id, Descricao, Valor FROM produtos";
        $resultado = mysqli_query($conexao,$sql);

?>
<table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Verifica se a consulta retornou resultados
            if ($resultado->num_rows > 0) {
                // Exibe os dados de cada linha
                while($row = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Id"] . "</td>";
                    echo "<td>" . $row["Descricao"] . "</td>";
                    echo "<td>" . $row["Valor"] . "</td>";
                    echo "<td><a class='btn btn-warning'>Editar</a>  ";
                    echo "<a class='btn btn-danger'>Excluir</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
            }
            
            $conexao->close();
            ?>
        </tbody>
    </table>

<?php include "rodape.php"; ?>