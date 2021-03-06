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
      error_reporting(0);
      ini_set("display_errors", 0 );
			session_start();
			require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
      //formulario de busca do usuario pela ID
      /*echo 'Informe o ID do usuário para busca!';
      echo '<form method="post" action="">';
      echo '<input class="common-input mb-20 form-control"  style="width:35%;"
      type="text" name="busca">';
      echo '<br>';
      echo ' <input class="btn" type="submit" value="buscar"
      style="background-color:rgb(39, 149, 163);border-color:black;color:white;">';
      echo '</form>';
      //variavel para capturar a ID e enviar para a query
      $buscar=$_POST['busca'];*/

      $sql = "SELECT * FROM 
      patrimonio "; //todo o select vai ser em cima da ID da variaval $bucar

      $result = $conn->query($sql);

          //ciclo para exibição do select
          if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo '<form method="post" action="consulta_editar.php">';
            echo $id=$row['id']." ".$nome=$row['nome'].
            '<input class="btn" name="busca" type="submit" value="Editar">'.
            '<br>';
            echo '</form>';
            
            
            /*echo "Usuario: ".$row["nome"]." ".'<a class="btn btn-sm" href="consulta_editar.php"
            type="button" value="Editar"
            style="background-color:gray;color:white;
            border-color:black;">'."Editar".'</a>'."<br>";*/


          }}
          
			$conn->close();
			?>
      <div id="form_edit" class="container" style="width:35%;padding-bottom:100px;">
      <!-- Formulário de edição / exxibição dos dados do select --
      <form action="editar.php" method="post" >
          <input type="hidden" name="id" id="nome" value="<?php echo $id;?>"><br>
          <label>Nome : </label> <input class="common-input mb-20 form-control" type="text" name="nome" id="nome" value="<?php echo $nome;?>"><br>
          <label>Sobrenome : </label> <input class="common-input mb-20 form-control" type="text" name="sobrenome" id="nome" value="<?php echo $sobrenome;?>"><br>
          <label>Maquina : </label> <input class="common-input mb-20 form-control" type="text" name="maquina" id="nome" value="<?php echo $maquina;?>"><br>
          <label>Monitor 1 : </label> <input class="common-input mb-20 form-control" type="text" name="monitor1" id="nome" value="<?php echo $monitor1;?>"><br>
          <label>Monitor 2 : </label> <input class="common-input mb-20 form-control" type="text" name="monitor2" id="nome" value="<?php echo $monitor2;?>"><br>
          <label>Teclado : </label> <input class="common-input mb-20 form-control" type="text" name="teclado" id="nome" value="<?php echo $teclado;?>"><br>
          <label>Mouse : </label> <input class="common-input mb-20 form-control" type="text" name="mouse" id="nome" value="<?php echo $mouse;?>"><br>
          <label>Estabilizador : </label> <input class="common-input mb-20 form-control" type="text" name="estabilizador" id="nome" value="<?php echo $estabilizador;?>"><br>

          <br>
          <!-- botão de confirmar o update para o editar.php --
          <input class="btn" type="submit" onClick="return confirm('Deseja atualizar o registro?');"
		      name="Submit" value="Salvar" id="button-form"
          style="background-color:darkgreen;border-color:black;color:white;">
          <!-- botão para clenar as alterações antes de enviar --
          <input class="btn" type="reset" value="Limpar"
          style="background-color:darkred;border-color:black;color:white;">

      </form>--:
      </div>


	</div></div></body>

</html>