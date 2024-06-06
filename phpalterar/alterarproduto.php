<?php
    include_once "factory/conexao.php";
    $id = $_POST["cxcodigo"];
    $produto = $_POST["cxproduto"];
    $marca = $_POST["cxmarca"];

    $alterar = "
    UPDATE tbproduto SET 
    produto = '$produto',
    marca = '$marca'
    where 
    codigo = '$id'
    ";

    $executar = mysqli_query($conn, $alterar);
    if($executar){
        echo "Dados alterados com sucesso";
    }else{
        echo "Erro ao alterar os dados";

    }
?>
<a href="telaconsultanomeproduto.php">Voltar</a>