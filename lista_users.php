<?php
error_reporting(0);
ini_set("display_errors", 0 );
include_once 'includes/navbar.php';

?>
<!-- form PESQUISA -->
<div class="container"> 
  <div id="consulta" style="padding-top:100px;padding-bottom: 100px;">
  <form action="" method="post">
  <h5>Selecione abaixo!</h5>
    <p>
      <input type="radio" name="select" value="homeoffice"/> <i><img src="img/homeoffice.png" alt="Bootstrap" width="25"
      height="25" style="padding-bottom: 5px;"> Home Office</i>
      <input type="radio" name="select" value="hibrido"/> <i><img src="img/homeoffice.png" alt="Bootstrap" width="25"
      height="25" style="padding-bottom: 5px;"> Hibrido</i>
      <input type="radio" name="select" value="presencial"/> <i><img src="img/officer.png" alt="Bootstrap" width="25"
      height="25" style="padding-bottom: 5px;"> Presencial</i>
      <input type="radio" name="select" value="desligados"/> <i><img src="img/employee.png" alt="Bootstrap" width="25"
      height="25" style="padding-bottom: 5px;">Ex-colaboradores
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
      include_once 'homeoffice.php';      
    }
    elseif ($answer == "hibrido") {
      include_once 'hibrido.php';
  } 
  elseif ($answer == "presencial") {
    include_once 'presencial.php';
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