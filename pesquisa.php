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
                <a class="nav-link active" href="#">Pesquisa de patrimônio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="consulta_editar.php">Editar</a>
              </li>
          </div>
        </div>
      </nav>
      
      <!--FIM NAVBAR-->
      <!-- form PESQUISA -->
      <div class="container"> 
<form class="form-area" id="form_leitura" action="" method="post"> 

    <div class="col-lg-6 form-group" style="padding-top:100px;">
    <h3>Pesquisar patrimônio</h3>
            <input type="text" class="common-input mb-20 form-control " id="usuario" name="usuario" placeholder="nome ou sobrenome"
            onfocus="this.placeholder = ''" onblur="this.placeholder = 'nome e sobrenome'"  required=""><br>


            
            <div class="col-lg-12">
                <div class="alert-msg" style="text-align: center;"></div>
                <button class="btn " style="float: left;background-color:rgb(115, 221, 235);border-color:black;color:black;" type="submit">Pesquisar</button>											
            </div>
        </div>
        <div id="pesquisa" style="text-align: left;padding-top:100px;">
    
            <?php

            error_reporting(0);
            ini_set("display_errors", 0 );
            session_start();
            //require_once("cfg" . DIRECTORY_SEPARATOR . "verifica_login.php");
            
            require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
            

            $nome=$_POST['usuario'];
            $sobrenome=$_POST['usuario'];

            $sql = "SELECT id,nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador FROM patrimonio where nome ='$nome' or sobrenome = '$sobrenome'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "ID: ".$row['id']."<br>"."Usuario: ".$row["nome"]." ".$row["sobrenome"]."<br>"."Maquina: ".$row["maquina"]."<br>"."Monitor 1: ".$row["monitor1"]."<br>"."Monitor 2: "
                    .$row["monitor2"]."<br>"."Teclado: ".$row["teclado"]."<br>"."Mouse: ".$row["mouse"]."<br>"."Estabilizador: ".$row["estabilizador"]."<br>"."<br>";
                }}else{
                    echo "0 Resultados";
                }

                
            $conn->close();


            ?>

</div>
      </div><br>
        
</form>
<br>
<br>


  </body>
</html>