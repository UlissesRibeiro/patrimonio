<?php

include_once 'includes/navbar.php';

?>

<?php
session_start();
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
    error_reporting(0);
    ini_set("display_errors", 0 );
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $maquina=$_POST['maquina'];
    $monitor1=$_POST['monitor1'];
    $monitor2=$_POST['monitor2'];
    $teclado=$_POST['teclado'];
    $mouse=$_POST['mouse'];
    $estabilizador=$_POST['estabilizador'];


    $sql = "INSERT INTO patrimonio(nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador)
            VALUES('$nome','$sobrenome','$maquina','$monitor1','$monitor2','$teclado','$mouse','$estabilizador')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="container d-flex justify-content-center" style="padding-top:100px;">';
        echo "Cadastro realizado com sucesso ";
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        echo '<a class="btn btn-sm" style="border-color: darkgreen;" type="submit" href="form_cadastro.php">
        <i class="bi bi-box-arrow-left"> Voltar</i></a>';
        echo '</div>';
?>
<html>
    <body>
        <!--<div class="container d-flex justify-content-center">
            <a class="btn btn-sm" style="border-color: darkgreen;" type="submit" href="form_cadastro.php">
            <i class="bi bi-box-arrow-left"> Voltar</i></a>
        </div>-->
    
    </body>
</html>
