<?php include "cabecalho.php"; include "conexao.php";  ?>
<?php 
    if( isset($_POST["descricao"]) && !empty($_POST["descricao"]) &&
        isset($_POST["valor"]) && !empty($_POST["valor"]) 
      )
    {
        $descricao = $_POST['descricao'];
        $valor = str_replace(",",".",$_POST['valor']) ;
        $imagem = $_POST['imagem'];
        $id = $_GET['id'];

        if(isset($_FILES['novaImagem']))
        {
            $nomeArquivo = $_FILES['novaImagem']['name'];
            $tmpNomeArquivo = $_FILES['novaImagem']['tmp_name'];
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
               $imagem = "semfoto.png"; 
        }

        $sql = "Update Produtos set Descricao = '$descricao', Valor = $valor, Imagem = '$imagem' where Id = $id";
        $resultado = $conexao->query($sql);
        if($resultado)
        {
            header("location: produtos.php");
        }
        else
        {
            echo "<div class='alert alert-danger'>";
            echo  "Erro ao salvar os dados";
            echo "</div>";
        }
    }
?>

<?php
    
    $sql = "SELECT * from produtos where id = $_GET[id]";
    $resultado = $conexao->query($sql);
    while ($row = $resultado->fetch_assoc()) 
    {
        $descricao = $row['Descricao'];
        $valor = $row['Valor'];
        $imagem = $row['Imagem'];
    }

?>
<form action="editar_produto.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
    <label>Descrição do Produto</label>
    <input class="form-control"
             value="<?php echo $descricao; ?>" 
             name="descricao" />
    <br>
    <label>Valor do Produtos</label>
    <input class="form-control"
            value="<?php echo $valor; ?>" 
            name="valor" />
    <br>
  
    <input type="file" name="novaImagem" accept="image/*"> 
    <input type="hidden" name="imagem" value="<?php echo $imagem; ?>"/> 
    <br>
    <img src="<?php echo "/".basename(__DIR__). "/img/$imagem" ; ?>" width="150" height="100" />
    <br>
    <button type="submit" class="btn btn-success">
        Enviar dados
    </button>
</form>


<?php include "rodape.php"; ?>