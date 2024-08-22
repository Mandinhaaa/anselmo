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
    $pesquisa = $_POST["cxpesquisa"];
    $consulta = "SELECT *FROM tbprodutos where produto ='$pesquisa' ";
    $executar = mysqli_query($caminho,$consulta);
    $linha = mysqli_fetch_array($executar);
    if ($linha==true){

 
    ?>
    Produto:
    <br>
    <input type="text" value="<?php echo $linha["produto"]?>"><br>
    Fabricante:
    <br>
    <input type="text" value="<?php echo $linha["fabricante"]?>"><br>
    Valor:
    <br>
    <input type="text" value="<?php echo $linha["valor"]?>"><br>
    <?php
        } else {
            echo "
            <script>
                alert('Dados não encontrados!');
                window.location.href = 
                '../../view/produto/telaconsultanome.php'
            </script>";
        }
    ?>

    <a href="">Alterar</a>
    <a href="">Excluir</a>

</body>
</html>