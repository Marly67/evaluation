<?php

//conexion al servidor

function conectar()
{
	//conexion al servicodr
	
$conexion =mysql_connect("localhost","root","");

//seleccionar la base de datos
$bd=mysql_select_db("evaluation",$conexion);

return $conexion;
}
?>