<?php
		require("conexion.php");

		$conexion = conectar();

		$code = $_POST['code'];

		$sql = "DELETE FROM sweets WHERE code = '$code'";

		 $outcome = mysql_query($sql,$conexion);
		
		if($outcome) {
			echo "product removed successfully";
		}else echo "this is embarrassing, a problem has occurred and the operation could not be completed!";

		mysql_close($conexion);
?>	