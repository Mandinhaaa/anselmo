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
    $consulta = "SELECT *FROM tbamigos where amigo ='$pesquisa' ";
    $executar = mysqli_query($caminho,$consulta);
    $linha = mysqli_fetch_array($executar);
    if ($linha==true){

 
    ?>
    Amigo:
        <br>
        <input type="text" name="cxamigo" value="<?php echo $linha["amigo"]?>"><br>
        Apelido:
        <br>
        <input type="text" name="cxapelido" value="<?php echo $linha["apelido"]?>"><br>
        Email:
        <br>
        <input type="text" name="cxemail"  value="<?php echo $linha["email"]?>" ><br>
    <?php
        } else {
            echo "
            <script>
                alert('Dados não encontrados!');
                window.location.href = 
                '../../view/amigo/telaconsultanome.php'
            </script>";
        }
    ?>

    <a href="">Alterar</a>
    <a href="">Excluir</a>

</body>
</html>