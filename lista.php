<select name="owner">
<?php 
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
$lista = "SELECT usuario FROM patrimonio";
$result = $conn->query($lista);
while ($row = $result->fetch_assoc()){
echo "<option value=\"owner1\">" . $row['usuario'] . "</option>";

}

?>
</select>

<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "admin", "123@vox");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "patrimonio");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM patrimonio") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  //echo "Nome:".$aux["usuario"]."<br />"; 
  echo "Maquina:".$aux["maquina"]."<br />"; 
}
 
?>