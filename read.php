<?php
    /*error_reporting(0);
    ini_set("display_errors", 0 );
    session_start();
    require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

    $sql = "SELECT * from patrimonio"; 
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
                
                <a class='btn' style='background-color:white;color:black;
                border-color:blue;border-radius:; width:55%;'
                href=form_editar_cadastro.php?id=$id><i class='bi bi-pen-fill'> </i>
                </a>
                
                <td>
                <a class='btn'  style='background-color:white;color:black;
                border-color:red;border-radius:; width:55%;'
                href=delete.php?id=$id><i class='bi bi-trash-fill'></i>
                </a>
                </td>";
                
          echo "</tr>";
        }

    //echo "<tr>";
    //echo "<td>$nome</td><td><a href=update.php?id=$id>Editar</a></td>";
    //echo "<td>$nome</td><td><a href=editar.php?id=$id>Editar</a></td>";
   // echo "</tr>";

?>

