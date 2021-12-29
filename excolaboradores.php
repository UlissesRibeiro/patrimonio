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
                    <th scope="col"> </th>
                    <!--<th scope="col">Deletar</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                    //include_once 'read.php';
                    $sql = "SELECT * from desligados  group by nome,sobrenome ";
                    //where id ='$buscar'";
                    //todo o select vai ser em cima da ID da variaval $bucar

                    $result = $conn->query($sql);

                        //ciclo para exibição do select
                        while($row = $result->fetch_assoc()){
                        $id=$row['id'];
                        $nome=$row['nome']."<br>";
                        $sobrenome=$row['sobrenome'];
                        $maquina=$row['maquina'];
                        $monitor1=$row['monitor1'];
                        $monitor2=$row['monitor2'];
                        $teclado=$row['teclado'];
                        $mouse=$row['mouse'];
                        $estabilizador=$row['estabilizador'];

                        echo "<tr>";
                        //echo "<td>$nome</td><td><a href=update.php?id=$id>Editar</a></td>";
                        echo "<td style='text-transform: capitalize;'>$nome</td>
                                <td style='text-transform: capitalize;'>$sobrenome</td>"." "
                                ."<td>

                                <a class='btn btn-sm' style='background-color:white;color:black;
                                border-color:;border-radius:; width:0%;'
                                href=excolab.php?id=$id><i><img src='img/file.png' alt='Bootstrap' width='30' height='30' style='padding-bottom: 5px;'> </i>
                                </a>
                                
                                <!--<td>
                                <a class='btn'  style='background-color:white;color:black;
                                border-color:red;border-radius:; width:0%;'
                                href=delete.php?id=$id><i><img src='img/delete.png' alt='Bootstrap' width='30' height='30' style='padding-bottom: 5px;'> </i>
                                </a>
                                </td>-->";
                                
                        echo "</tr>";
                        }

                ?>
            </tbody>
        </table>
    </body>
</html>