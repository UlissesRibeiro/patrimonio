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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="patrimonios.php">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="form_cadastro.php">Cadastrar patrimônio</a>
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="streamers.html">Streamers</a>-->
                <a class="nav-link" href="pesquisa.php">Pesquisa de patrimônio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.html">Contato</a>
              </li>
          </div>
        </div>
      </nav>
      
      <!--FIM NAVBAR-->

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
                        </form><br><br>

</body></html>