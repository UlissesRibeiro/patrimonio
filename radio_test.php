<?php

include_once 'includes/navbar.php';



?>
<div style="color:black;">teste</div>

<form action="" method="post" style="padding-top:100px;">
<h5>Filtrar</h5>
            <p>
                <input type="radio" name="patrimonio" value="homeoffice"/>Home Office
                <input type="radio" name="patrimonio" value="presencial"/> Presencial
                <input type="radio" name="patrimonio" value="ex"/>Ex-colaboradores
            </p>
            <p>
                <input type="submit" value="Aplicar filtro" />
            </p>
        </form>
<div>
        <?php 

$answer = $_POST['patrimonio'];  
if ($answer == "homeoffice") { 
    session_start();
    //include_once 'includes/navbar.php';        
   //include_once 'consultas.php';      
}

elseif ($answer == "ex") {
    //include_once 'cadastro.php';
} 
else {
    echo 'Incorrect';
}          
?>
</div>
</body>
</html>