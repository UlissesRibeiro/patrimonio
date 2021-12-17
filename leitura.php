
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

    <title>Leitura de Dados</title>
</head>
<body>
    <main>
        <section class="contact-page-area section-gap">
            <div class="container" style="padding-top: 100px;">
                <div class="row ">
                    <div class="col-lg-12" >
                        <!-- Form NOVO CADASTRO -->
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

                            require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

                            $usuario=$_POST['usuario'];

                            $sql = "SELECT maquina,monitor1,monitor2,teclado,mouse,estabilizador FROM patrimonio where usuario = '$usuario'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "Maquina:".$row["maquina"]."<br>"."Monitor 1:".$row["monitor1"]."<br>"."Monitor 2:".$row["monitor2"]."<br>".
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