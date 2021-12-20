<?php

$conn = new mysqli("localhost","admin","123@vox","patrimonio");

if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}

/*if($conn->connect_error){
    echo "Erro :" .$conn->connect_error;
}
else{
    echo "Conexão efetuada com sucesso!";
}*/

//echo "Cadastro realizado com sucesso!"

?>