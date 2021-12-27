<?php

include_once 'includes/navbar.php';

?>
<!-- form PESQUISA -->
<div class="container"> 
  <div id="consulta" style="padding-top:100px;padding-bottom: 100px;">
  <form action="" method="post">
  <h5>Selecione abaixo!</h5>
    <p>
      <input type="radio" name="select" value="homeoffice"/> Home Office
      <input type="radio" name="select" value="presencial"/> Presencial
      <input type="radio" name="select" value="desligados"/> Ex-colaboradores
      <!--<input type="radio" name="patrimonio" value="ex"/>Ex-colaboradores-->
    </p>
    <p>
      <button class="btn btn-sm" type="submit" value="Aplicar filtro"
      style="background-color:;border-color:darkgreen;color:black;" >
      <i class="bi bi-funnel"></i>Aplicar filtro</button>
    </p>

  </form>
    <?php
    //include_once 'consultas.php'

    $answer = $_POST['select'];  
    if ($answer == "homeoffice") { 
        session_start();
        //include_once 'includes/navbar.php';        
      include_once 'consultas.php';      
    }

    elseif ($answer == "desligados") {
        include_once 'excolaboradores.php';
    } 
    else {
        echo 'Nenhuma opção foi selecionada';
    } 
    ?>



  </div>
</div>
</body>

</html>