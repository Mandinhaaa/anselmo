<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
</head>
<body>
    <form action="../../model/produto/inserirproduto.php" method="POST">
        Produto:
        <br>
        <input type="text" name="cxproduto"><br>
        Fabricante:
        <br>
        <input type="text" name="cxfabricante"><br>
        Valor:
        <br>
        <input type="text" name="cxvalor">
        <input type="submit" value="Gravar">
    </form>
</body>
</html>