<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "factory/conexao.php";
    $pesquisa = $_POST["cxpesquisaproduto"];
    $consulta = "select *from tbproduto where produto = '$pesquisa' ";
    $executar = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($executar);
    ?>

    <form action="alterarproduto.php" method="POST">
    Código: <br>
    <input type="text" name="cxcodigo" value="<?php echo $linha["codigo"]?>" /></br>

    Produto: <br>
    <input type="text" name="cxproduto" value="<?php echo $linha["produto"]?>" /></br>
    
    Marca: <br>
    <input type="text" name="cxmarca" value="<?php echo $linha["marca"]?>" /></br>
    <input type="submit" value="Alterar">
    </form>
</body>
</html>