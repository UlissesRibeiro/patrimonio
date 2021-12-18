<?php

require_once("cfg" . DIRECTORY_SEPARATOR . "conectar_cadastro.php");
    //error_reporting(0);
    // ini_set(“display_errors”, 0 );
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];
    $cpf=$_POST['cpf'];



    $sql = "INSERT INTO login (nome,email,senha,telefone,cpf)
            VALUES('$nome','$email',md5('$senha'),'$telefone','$cpf')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        } 
?>
<html>
    <body>
    <a type="submit" href="/patrimonios/index.php">Voltar</a>
    </body>
</html>
