<?php
    error_reporting(0);
    ini_set("display_errors", 0 );
    session_start();
    require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");


?>

<html>
    <body>
        <table class="table" id="tabela">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'read.php';
                ?>
            </tbody>
        </table>
    </body>
</html>