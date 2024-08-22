<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "../../factory/conexao.php";
    $consulta = "SELECT *FROM tbprodutos ";
    $executar = mysqli_query($caminho,$consulta);
    while($linha = mysqli_fetch_array($executar)){
    ?>

    Produto:
    <input type="text" value="<?php echo $linha["produto"]?>">
    Fabricante:
    <input type="text" value="<?php echo $linha["fabricante"]?>">
    Valor:
    <input type="text" value="<?php echo $linha["valor"]?>">



    <a href="">Alterar</a>
    <a href="">Excluir</a><br><br>
    <?php } ?> 

</body>
</html>