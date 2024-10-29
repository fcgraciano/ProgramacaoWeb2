<?php
if( !empty($_GET['id']) && isset( $_GET['id'] ) )
{
    //Logica da exclusão
    include 'conexao.php';
    $sql = "Delete from Produtos where Id = $_GET[id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        header('location: produtos.php');
    }
    else
    {
        header('location: produtos.php?Erro=Erro ao excluir');
    }
}
else
{
    header('location: produtos.php');
}
?>