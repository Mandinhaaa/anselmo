<?php
if($_POST["cxamigo"] != ""){
    include_once "../../factory/conexao.php";
    $amigo = $_POST["cxamigo"];
    $apelido = $_POST["cxapelido"];
    $email = $_POST["cxemail"];
    $sql = "INSERT into tbamigos (amigo,apelido,email) values ('$amigo','$apelido','$email')";
    $executar = mysqli_query($caminho,$sql);
    echo "<script>
    alert('Cadastrado com sucesso!');
    document.location.href = '../../index.php';
    </script>";
}else {
    echo "Dados não cadastrados";
}
?>