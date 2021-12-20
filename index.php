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
        
        <title>Login</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
        <!-- css do projeto-->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/streamers.css">
    </head>

    <body>
        <!-- bloco do php responsável pelo inicio de sessão -->
        <?php
        //error_reporting(0);
        //ini_set("display_errors", 0 );
        session_start();
        ?>
        <!-- bloco que retorna erro de login -->
        <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="notification is-danger">
                <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
    <div id="pag_login">
        <div  id="form_login"> 
         <!-- formulário de login --> 
            <form action="login.php" method="post" id="">
                <h4>Login</h4>
                <label>Nome do usuário</label><br>
                <input type="text" id="usuario" name="usuario" placeholder="usuario" ><br><br>
                <label>Senha</label><br>
                <input type="password" id="senha" name="senha"  placeholder="senha" ><br><br>

                <button class="btn " style="float: left;" type="submit">Entrar</button>
            
            </form>
        </div>
    </div>
    <br>
        

        <!--<form action="cad_login.php" method="post" id="form_cad">
        <h4>Cadastro</h4>
            <label>Nome</label><br>
            <input type="text" id="nome" name="nome"><br>

            <label>E-mail</label><br>
            <input type="text" id="email" name="email"><br>

            <label>Senha</label><br>
            <input type="password" id="senha" name="senha"><br>

            <label>Telefone</label><br>
            <input type="text" id="telefone" name="telefone"><br>
            
            <label>CPF</label><br>
            <input type="text" id="cpf" name="cpf"><br><br>

            <button class="genric-btn primary" style="float: left;" type="submit">Enviar</button>

        </form>-->
    </body>