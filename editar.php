<?php

include_once 'includes/navbar.php';

?>

<?php
session_start();
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

//$atual=$_POST['nome_atual'];
$id=$_POST['id'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$maquina=$_POST['maquina'];
$monitor1=$_POST['monitor1'];
$monitor2=$_POST['monitor2'];
$teclado=$_POST['teclado'];
$mouse=$_POST['mouse'];
$estabilizador=$_POST['estabilizador'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE patrimonio SET nome='$nome',
  sobrenome='$sobrenome', maquina='$maquina',monitor1='$monitor1',
  monitor2='$monitor2',teclado='$teclado',mouse='$mouse',estabilizador='$estabilizador'
   WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo '<div class="container d-flex justify-content-center" style="padding-top:100px;">';
    echo "Cadastro atualizado com sucesso!";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  echo '<a class="btn btn-sm" style="border-color: darkgreen;" type="submit" href="lista_users.php">
  <i class="bi bi-box-arrow-left"> Voltar</i></a>';
  echo '</div>';
  
  $conn->close();

?>

