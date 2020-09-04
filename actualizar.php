<?php


require("conexion.php");
$conexion=conectar();

$code=$_POST["code"];
$cake=$_POST["cake"];
$drinks=$_POST["drinks"];
$jelly=$_POST["jelly"];
$icecream=$_POST["icecream"];
$cheeses=$_POST["cheeses"];
$flan=$_POST["flan"];
$pudding=$_POST["pudding"];
 
$sql = "UPDATE sweet SET cake='$cake', drinks='$drinks', jelly='$jelly', icecream='$icecream', cheeses='$cheeses' , flan='$flan' ,pudding='$pudding' WHERE code='$code';";

$outcome=mysql_query($sql,$conexion);

if ($outcome)
{
	echo "Outcome...<br/>";
}
else{
	echo mysql_error($conexion);
}


mysql_close($conexion);
?>