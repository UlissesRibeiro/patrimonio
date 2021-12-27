<?php

include_once 'includes/navbar.php';

?>
      <!--FIM NAVBAR-->
      <!-- form PESQUISA -->
	  
      <div class="container"> 
		<div id="consulta" style="padding-top:100px;padding-bottom: 100px;"> 
			<?php
      include_once 'consultas.php'
      /*error_reporting(0);
      ini_set("display_errors", 0 );
			session_start();
			require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
      /*formulario de busca do usuario pela ID
      echo 'Informe o ID do usuário para busca!';
      echo '<form method="post" action="">';
      /*echo '<input name="busca" type="radio"
      id="dvd" value="1" checked>Allan Silva <br>';
      echo '<input name="busca" type="radio"
      id="dvd" value="2" checked><br>';*
      echo '<input class="common-input mb-20 form-control"  style="width:35%;"
      type="text" name="busca">';
      echo '<br>';
      echo ' <input class="btn" type="submit" value="buscar"
      style="background-color:rgb(39, 149, 163);border-color:black;color:white;">';
      echo '</form>';
      //variavel para capturar a ID e enviar para a query
      $buscar=$_POST['busca'];*/

      

      /*$sql = "SELECT id,nome,sobrenome,maquina,monitor1,monitor2,teclado,mouse,estabilizador FROM 
      patrimonio where id ='$buscar'"; //todo o select vai ser em cima da ID da variaval $bucar

      $result = $conn->query($sql);

          //ciclo para exibição do select
          while($row = $result->fetch_assoc()){
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

			$conn->close();*/
			?>
      <!--<div id="form_edit" class="container" style="width:35%;padding-bottom:100px;">
      <!-- Formulário de edição / exxibição dos dados do select --
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
          <!-- botão de confirmar o update para o editar.php --
          <input class="btn" type="submit" onClick="return confirm('Deseja atualizar o registro?');"
		      name="Submit" value="Salvar" id="button-form"
          style="background-color:darkgreen;border-color:black;color:white;">
          <!-- botão para clenar as alterações antes de enviar --
          <input class="btn" type="reset" value="Limpar"
          style="background-color:darkred;border-color:black;color:white;">

      </form>
      </div>-->


	</div></div></body>

</html>