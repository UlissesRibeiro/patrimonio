<?php

include_once 'includes/navbar.php';

?>

<?php
session_start();
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$sql = $conn->query("SELECT * from patrimonio where id='$id'"); 
//$result = $conn->query($sql);

    //ciclo para exibição do select
    while($row = $sql->fetch_assoc()){
      $id=$row['id'];
      $nome=$row['nome'];
      $sobrenome=$row['sobrenome'];
      $maquina=$row['maquina'];
      $monitor1=$row['monitor1'];
      $monitor2=$row['monitor2'];
      $teclado=$row['teclado'];
      $mouse=$row['mouse'];
      $estabilizador=$row['estabilizador'];


    }

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

  $copy=$conn->query("INSERT INTO desligados (id,nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador)
    SELECT id,nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador FROM patrimonio where id='$id'");
    
  $sql = $conn->query("DELETE from patrimonio WHERE id='$id'");

  echo '<div class="container d-flex justify-content-center" style="padding-top:100px;">';
  echo "Cadastro deletado!";

  //echo "Error updating record: " . $conn->error;

  echo '<a class="btn btn-sm" style="border-color: darkgreen;" type="submit" href="lista_users.php">
  <i class="bi bi-box-arrow-left"> Voltar</i></a>';
  echo '</div>';

  
  $conn->close();

?>

