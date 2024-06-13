<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    SESSION_START();
    if((!isset($_SESSION["login"])==true) && (!isset($_SESSION["senha"])==true))
    {
            header("location:index.php");
    }
    $logado = $_SESSION["login"];
    ?>
</head>
<body>
    <h1>Sistema de Mega IF</h1>
    <hr size="S" color="#ddd">
    HOME | VENDAS | CONTATOS - Usuário:
    <?php echo $logado?>
    | 
    <a href= "sair.php" >SAIR</a>
</body>
</html>