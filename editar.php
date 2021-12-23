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
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();

?>

<html>
  <a href="consulta_editar.php">voltar</a>
</html>