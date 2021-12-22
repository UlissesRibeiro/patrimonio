<?php

session_start();

// Executa uma consulta 
$sql = "SELECT nome, sobrenome , maquina  FROM patrimonios";

require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
            

//$nome_antigo='allan';
//$sobrenome=$_POST['usuario'];

$sql = "SELECT nome FROM patrimonio where nome = 'alan'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "Usuario: ".$row["nome"]."<br>";
	}}else{
		echo "0 Resultados";
	}

	
$conn->close();


?>
<html>
	<!--<a href="editar.php">Editar</a>-->
	<form id="form1" name="form1" method="post" action="editar.php">
	<label>Nome atual : </label><input type="text" name="nome_atual" id="nome"><br>
	<label>Novo Nome : </label><input type="text" name="novo_nome" id="nome"><br>
	

		<input type="submit" onClick="return confirm('Deseja atualizar o registro?');"
		name="Submit" value="SALVAR ALTERAÇÕES" id="button-form">


	</form>
</html>