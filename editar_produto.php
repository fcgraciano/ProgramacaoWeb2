<?php include "cabecalho.php"; ?>
<?php
    include "conexao.php"; 
    $sql = "SELECT * from produtos where id = $_GET[id]";
    $resultado = $conexao->query($sql);
    while ($row = $resultado->fetch_assoc()) 
    {
        $descricao = $row['Descricao'];
        $valor = $row['Valor'];
        $imagem = $row['Imagem'];
    }

?>
<form action="editar_produto.php"
         method="post"
          enctype="multipart/form-data">
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
  
    <input type="file" name="imagem" accept="image/*" required> 
    <br>
    <img src="<?php echo "/".basename(__DIR__). "/img/$imagem" ; ?>" />
    <br>
    <button type="submit" class="btn btn-success">
        Enviar dados
    </button>
</form>


<?php include "rodape.php"; ?>