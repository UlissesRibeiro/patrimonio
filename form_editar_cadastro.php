<?php
    error_reporting(0);
    ini_set("display_errors", 0 );
    session_start();
    require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");

    $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    $sql = $conn->query("SELECT * from patrimonio where id='$id'"); 
    //$result = $conn->query($sql);

        //ciclo para exibição do select
        while($row = $sql->fetch_assoc()){
          $id=$row['id'];
          $nome=$row['nome'];
          $sobrenome=$row['sobrenome'];
          $maquina=$row['maquina'];
          $monitor1=$row['monitor1'];
          $monitor2=$row['monitor2'];
          $teclado=$row['teclado'];
          $mouse=$row['mouse'];
          $estabilizador=$row['estabilizador'];
        }

?>

<?php

include_once 'includes/navbar.php';

?>
    <div id="form_edit" class="container" style="width:35%;padding-bottom:100px;padding-top:100px;">
      <!-- Formulário de edição / exxibição dos dados do select -->
      <form action="editar.php" method="post" >
          <input type="hidden" name="id" id="nome" value="<?php echo $id;?>"><br>
          <label>Nome : </label> <input class="common-input mb-20 form-control" type="text" name="nome" id="nome" value="<?php echo $nome;?>"><br>
          <label>Sobrenome : </label> <input class="common-input mb-20 form-control" type="text" name="sobrenome" id="nome" value="<?php echo $sobrenome;?>"><br>
          <label>Maquina : </label> <input class="common-input mb-20 form-control" type="text" name="maquina" id="nome" value="<?php echo $maquina;?>"><br>
          <label>Monitor 1 : </label> <input class="common-input mb-20 form-control" type="text" name="monitor1" id="nome" value="<?php echo $monitor1;?>"><br>
          <label>Monitor 2 : </label> <input class="common-input mb-20 form-control" type="text" name="monitor2" id="nome" value="<?php echo $monitor2;?>"><br>
          <label>Teclado : </label> <input class="common-input mb-20 form-control" type="text" name="teclado" id="nome" value="<?php echo $teclado;?>"><br>
          <label>Mouse : </label> <input class="common-input mb-20 form-control" type="text" name="mouse" id="nome" value="<?php echo $mouse;?>"><br>
          <label>Estabilizador : </label> <input class="common-input mb-20 form-control" type="text" name="estabilizador" id="nome" value="<?php echo $estabilizador;?>"><br>

          <br>
          <!-- botão de confirmar o update para o editar.php -->
          <input class="btn" type="submit" onClick="return confirm('Deseja atualizar o registro?');"
		      name="Submit" value="Salvar" id="button-form"
          style="background-color:darkgreen;border-color:black;color:white;">
          <!-- botão para clenar as alterações antes de enviar -->
          <input class="btn" type="reset" value="Limpar"
          style="background-color:darkred;border-color:black;color:white;">

      </form>
      </div>
</body>
</html>