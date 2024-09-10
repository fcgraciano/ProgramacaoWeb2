<?php include "cabecalho.php";?>
<?php include "Conexao.php";  ?>

<?php 
    if( isset($_POST['valor']) && isset($_POST['descricao']) )
    {
        $descricao = $_POST['descricao'];
        $valor = str_replace(",",".",$_POST['valor']);
        $imagem = "";
        if(isset($_FILES['imagem']))
        {
            $nomeArquivo = $_FILES['imagem']['name'];
            $tmpNomeArquivo = $_FILES['imagem']['tmp_name'];
            $caminhoDestino = dirname(__FILE__)."/img/". basename($nomeArquivo);
            if (move_uploaded_file($tmpNomeArquivo, $caminhoDestino)) {
                $imagem = basename($nomeArquivo);
            } else {
                
                $imagem = "semfoto.png"; 
            }
        }
        else
        {
            echo "Erro ao enviar a imagem.";
               $imagem = "semfoto.png222"; 
        }


        $query = "Insert into produtos (Descricao, Valor, Imagem)
                    VALUES( '$descricao', $valor, '$imagem' )";


        $resultado = mysqli_query($conexao, $query);

        if($resultado){
            header('location: produtos.php');
            echo "<div class='alert alert-success'>Salvo com sucesso</div>";
        }
        
    }
    
?>




<form action="novo_produto.php" method="post" enctype="multipart/form-data">
    <label>Descrição do Produto</label>
    <input class="form-control" name="descricao" />
    <br>
    <label>Valor do Produtos</label>
    <input class="form-control" name="valor" />
    <br>
  
    <input type="file" name="imagem" accept="image/*" required> 
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-success">
        Enviar dados
    </button>
</form>
<?php include "rodape.php";?>