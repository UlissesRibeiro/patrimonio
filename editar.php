<?php
session_start();
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

$atual=$_POST['nome_atual'];
$novo=$_POST['novo_nome'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE patrimonio SET nome='$novo' WHERE nome='$atual'";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();

?>