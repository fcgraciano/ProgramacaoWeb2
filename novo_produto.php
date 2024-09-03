<?php include "cabecalho.php";?>
<?php include "Conexao.php";  ?>

<?php 
    if( isset($_POST['valor']) && isset($_POST['descricao']) )
    {
        $descricao = $_POST['descricao'];
        $valor = str_replace(",",".",$_POST['valor']);
        $query = "Insert into produtos (Descricao, Valor)
                    VALUES( '$descricao', $valor )";

        $resultado = mysqli_query($conexao, $query);

        if($resultado){
            echo "<div class='alert alert-success'>Salvo com sucesso</div>";
        }
        
    }
    
?>




<form action="novo_produto.php" method="post">
    <label>Descrição do Produto</label>
    <input class="form-control" name="descricao" />
    <br>
    <label>Valor do Produtos</label>
    <input class="form-control" name="valor" />
    <br>
    <button type="submit" class="btn btn-success">
        Enviar dados
    </button>
</form>
<?php include "rodape.php";?>