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

    <title>Cadastro</title>
</head>
<body>
    <main>
        <section class="contact-page-area section-gap">
            <div class="container" style="padding-top: 100px;">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form NOVO CADASTRO -->
                        <form class="form-area" id="form_contato" action="cadastro.php" method="post">  
                            <!--<img class="mb-4" src="img/cadastro.png" alt="" width="100" height="100">-->
                            <h1 class="h3 mb-3 fw-normal" style="text-align: center;">Cadastro de Patrimônios</h1>
      
                            <div class="row">	
                                <div class="col-lg-6 form-group">
                                    <h3>Novo Cadastro</h3>
                                    
                                    <label>Usuário
                                    <input type="text" class="common-input mb-20 form-control" id="nome" name="nome" placeholder="nome e sobrenome"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome completo'"  required=""></label>
                                    
                                    <label>Maquina
                                    <input type="text" class="common-input mb-20 form-control" name="maquina" id="maquina" placeholder="maquina"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'maquina'"  required="" ></label><br>

                                    <label>Monitor 1
                                    <input type="text" class="common-input mb-20 form-control" id="monitor1" name="monitor1" placeholder="monitor"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'monitor1'"  required=""></label>

                                    <label>Monitor 2
                                    <input type="text" class="common-input mb-20 form-control" id="monitor2" name="monitor2" placeholder="se não tiver inserir 0"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'monitor2'"  required=""></label><br>

                                    <label>Teclado
                                    <input type="text" class="common-input mb-20 form-control" id="teclado" name="teclado" placeholder="teclado"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'teclado'"  required=""></label>

                                    <label>Mouse
                                    <input type="text" class="common-input mb-20 form-control" id="mouse" name="mouse" placeholder="mouse"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'mouse'"  required=""></label>

                                    <label>Estabilizador
                                    <input type="text" class="common-input mb-20 form-control" id="estabilizador" name="estabilizador" placeholder="Estabilizador"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'estabilizador'"  required=""></label><br>

                                </div>

 

                                </div>
                                <br>
                                <!--<div class="col-lg-6 form-group">
                                    
                                </div>-->
                                                                    
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button class="genric-btn primary" style="float: left;" type="submit">Enviar</button>											
                                </div>
                            </div>
                        </form>

                        <!-- form PESQUISA -->
                        <form class="form-area" id="form_leitura" action="" method="post">  
                            <div class="col-lg-6 form-group">
                            <h3>Pesquisar patrimônio</h3>
                                    <input type="text" class="common-input mb-20 form-control" id="usuario" name="usuario" placeholder="nome e sobrenome"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'nome e sobrenome'"  required=""><br>
                                    
                                    <div class="col-lg-12">
                                        <div class="alert-msg" style="text-align: center;"></div>
                                        <button class="genric-btn primary" style="float: left;" type="submit">Pesquisar</button>											
                                    </div>
                                </div>
                        </form>
                        <div id="pesquisa" style="text-align: left;">
                            <?php

                            error_reporting(0);
                            ini_set(“display_errors”, 0 );
                            require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

                            $usuario=$_POST['usuario'];

                            $sql = "SELECT usuario,maquina,monitor1,monitor2,teclado,mouse,estabilizador FROM patrimonio where usuario = '$usuario'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "Usuario:".$row["usuario"]."<br>"."Maquina:".$row["maquina"]."<br>"."Monitor 1:".$row["monitor1"]."<br>"."Monitor 2:".$row["monitor2"]."<br>".
                                    "Teclado:".$row["teclado"]."<br>"."Mouse:".$row["mouse"]."<br>"."Estabilizador:".$row["estabilizador"]."<br>";
                                }}else{
                                    echo "0 Resultados";
                                }

                            $conn->close();


                            ?>
                        </div>
                    </div>
                </div>
            </div>	
        </section>
      </main>
</body>
</html>