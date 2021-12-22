<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- CSS BootStrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <!-- Icones BootStrap -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            
            <!-- JavaScript BootStrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

            <!-- fontes -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
            <!-- css do projeto-->
            <link rel="stylesheet" href="css/styles.css">

    <title>Patrimônios</title>
</head>
<body>
        <!--INICIO NAVBAR-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="patrimonios.php">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="form_cadastro.php">Cadastrar patrimônio</a>
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="streamers.html">Streamers</a>-->
                <a class="nav-link" href="pesquisa.php">Pesquisa de patrimônio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="consulta_editar.php">Editar</a>
              </li>
          </div>
        </div>
      </nav>
      
      <!--FIM NAVBAR-->
      <!-- form PESQUISA -->
	  
    <div class="container"> 
		<div id="consulta" style="padding-top:100px;"> 
			<?php
			session_start();
			require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

            echo '<form method="post" action="">';
            echo '<input type="text" name="busca">';
            echo '<input type="submit" value="buscar">';
            echo '</form>';

            $busca=$_POST['busca'];

			$sql = "SELECT id,nome FROM patrimonio where nome = '$busca'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo "<br>"."<br>"."Nome : ".$row['nome']."<br>";
                    echo '<br>';
	
				}}else{
					echo "0 Resultados";
				}
                    /*echo '<form method="post" action="editar.php">';
					echo '<p>Nome : <input type=text name="troca_nome" value='.$row["nome"].'>';
                    $troca_nome=$_POST['troca_nome'];
                    echo '<br>'.'<input type="submit" value="Salvar alterações">';
                    
                    echo '</fomr>';
                $sql = "UPDATE patrimonio SET nome='$troca_nome' WHERE nome='$busca'";
                    

                if ($conn->query($sql) === TRUE) {
                  echo "Record updated successfully";
                } else {
                  echo "Error updating record: " . $conn->error;
                }*/


			$conn->close();
			?>
	</div>
	<!--<a href="editar.php">Editar</a>-->
	<form id="form1" name="form1" method="post" action="editar.php" style="padding-top:50px;">
	<!--<label>Nome atual : </label><input type="text" name="nome_atual" id="nome"><br>-->
	<label>Novo Nome : </label><input type="text" name="novo_nome" id="nome"><br>
		<input type="submit" onClick="return confirm('Deseja atualizar o registro?');"
		name="Submit" value="SALVAR ALTERAÇÕES" id="button-form">


	</form>
</html>