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
    include_once '../factory/conexao.php';
    $nome= $_POST["cxpesquisa"];
    $consulta ="select *from tbcliente where nome ='$nome'";
    $executar = mysqli_query($conn,$consulta);
    $linha = mysqli_fetch_array($executar);
    ?>
    nome:
    <input type="text" value=" <?php echo $linha["nome"]?>"><br>
    email:
    <input type="text" value=" <?php echo $linha["email"]?>"><br>

    <a href="../model/excluircliente.php?
    id=<?php echo $linha["codigo"]?>">Excluir</a>
</body>
</html>