<?php

include_once 'includes/navbar.php';

?>
    
<!-- form PESQUISA -->
<div class="container " style="width: 50%;">
      <form class="form-area" id="form_leitura" action="" method="post" style="padding-top:50px;">  
        <div class="col-lg-6 form-group" style="padding-top:100px;">
            <h3><i class="bi bi-search"> Consulta</i></h3>
                <input type="text" class="common-input mb-20 form-control " id="usuario" name="usuario" placeholder="informe o nome ou sobrenome"
                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'nome e sobrenome'"  required=""><br>

            <div class="col-lg-12">
                <div class="alert-msg" style="text-align: center;"></div>
                <button class="btn " style="float: left;background-color:;border-color:darkgreen;color:black;" type="submit"><i class="bi bi-search"> Pesquisar</i></button>											
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

                $sql = "SELECT id,nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador 
                FROM patrimonio where nome ='$nome' or sobrenome = '$sobrenome'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        /*echo "ID: ".$row['id']."<br>"."Usuario: ".$row["nome"]." ".$row["sobrenome"]."<br>"."Maquina: ".$row["maquina"]."<br>"."Monitor 1: ".$row["monitor1"]."<br>"."Monitor 2: "
                        .$row["monitor2"]."<br>"."Teclado: ".$row["teclado"]."<br>"."Mouse: ".$row["mouse"]."<br>"."Estabilizador: ".$row["estabilizador"]."<br>"."<br>";*/
                        $id=$row['id'];
                        $nome=$row['nome']."<br>";
                        $sobrenome=$row['sobrenome'];
                        $maquina=$row['maquina'];
                        $monitor1=$row['monitor1'];
                        $monitor2=$row['monitor2'];
                        $teclado=$row['teclado'];
                        $mouse=$row['mouse'];
                        $estabilizador=$row['estabilizador'];

                        echo '</form>';
                        echo '<table class="table" id="tabela">';
                        echo '<thead>';
                        echo '<tr>';
                        echo    '<th scope="col">Nome</th>';
                        echo    '<th scope="col">Sobrenome</th>';
                        echo    '        <th scope="col">Máquina</th>';
                        echo    '        <th scope="col">Monitor 1</th>';
                        echo    '        <th scope="col">Monitor 2</th>';
                        echo    '        <th scope="col">Teclado</th>';
                        echo    '        <th scope="col">Mouse</th>';
                        echo    '        <th scope="col">Estabilizador</th>';
                        echo    '    </tr>';
                        echo    '</thead>';
                        echo    '<tbody>';
                        echo "<tr>";
                        echo "<td style='text-transform: capitalize;'>$nome</td>";
                        echo "<td style='text-transform: capitalize;'>$sobrenome</td>";
                        echo "<td style='text-transform: capitalize;'>$maquina</td>";
                        echo "<td style='text-transform: capitalize;'>$monitor1</td>";
                        echo "<td style='text-transform: capitalize;'>$monitor2</td>";
                        echo "<td style='text-transform: capitalize;'>$teclado</td>";
                        echo "<td style='text-transform: capitalize;'>$mouse</td>";
                        echo "<td style='text-transform: capitalize;'>$estabilizador</td>";
                        echo "</tr>";   
                        echo    '</tbody>';
                        echo '</table>';
                        echo '</form>';

                       
                        
                    }}else{
                        echo "0 Resultados";
                    }

                    
                $conn->close();


                ?>

            </div>
    
</div>
<br>
</body>
</html>