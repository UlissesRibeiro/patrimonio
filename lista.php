<select name="owner">
<?php 
require_once("cfg" . DIRECTORY_SEPARATOR . "config.php");
$sql = "SELECT usuario FROM patrimonio";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
echo "<option value=\"owner1\">" . $row['usuario'] . "</option>";
}
?>
</select>