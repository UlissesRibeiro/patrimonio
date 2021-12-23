<?php
session_start();
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
    //error_reporting(0);
    // ini_set(“display_errors”, 0 );
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $maquina=$_POST['maquina'];
    $monitor1=$_POST['monitor1'];
    $monitor2=$_POST['monitor2'];
    $teclado=$_POST['teclado'];
    $mouse=$_POST['mouse'];
    $estabilizador=$_POST['estabilizador'];


    $sql = "INSERT INTO patrimonio(nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador)
            VALUES('$nome','$maquina','$monitor1','$monitor2','$teclado','$mouse','$estabilizador')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
?>
<html>
    <body>
    <a type="submit" href="form_cadastro.php">Voltar</a>
    </body>
</html>
