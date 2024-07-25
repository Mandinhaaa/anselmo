<?php
include_once "../factory/conexao.php";
$id= $_GET["id"];
$excluir = "delete from tbcliente where codigo='$id'";
$executar = mysqli_query($conn,$excluir);
if($executar){
    echo "Cliente excluido com sucesso";
    echo "<br/>";
    echo "<a href='../view/consulta-cliente.php'>Voltar</a>";
} else {
    echo "erro de dados, ao exluir o cliente";
}?>