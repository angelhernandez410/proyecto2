<?php
	$mysqli = new mysqli ("localhost", "root", "2001", "proyecto");

	$salida = "";
	$query = "SELECT * FROM productos ORDER BY barcode";

	if(isset($_POST['consulta'])){
		$q = $mysqli->real_escape_string($_POST['consulta']);
		$query = "SELECT barcode, p_name, p_type FROM productos
		WHERE barcode LIKE '%".$q."%' OR p_name LIKE '%".$q."%' OR p_type LIKE '%".$q."%'";

	}

	$resultado = $mysqli->query($query);

	if ($resultado->num_rows > 0){

		$salida.="<table class = 'tabla_datos'>
					<thead>
						<tr style='border-bottom: 1px solid #d6d6d6;'>
							<td>Codigo</td>
							<td>Nombre</td>
							<td>Tipo</td>
							<td>Info</td>
						</tr>
					</thead>
					<tbody style='border-bottom: 1px solid #d6d6d6;'>"; 

		while($fila = $resultado->fetch_assoc()){
			$salida.="<tr id='codigo".$fila['barcode']."' style='border-bottom: 1px solid #d6d6d6;'>
					<td>".$fila['barcode']."</td>
					<td>".$fila['p_name']."</td>
					<td>".$fila['p_type']."</td>
					<td><a href='info.php?id=".$fila['barcode']."&nombre=".$fila['p_name']."&tipo=".$fila['p_type']."' style='text-align: center; left: 3em;'><button style=' display: inline-block;width: 45px; height: 45px; border-radius: 50%; font-family: palatino; border: 2px solid #555555; cursor: hand'><b>i</b></button></a></td>
			</tr>";
					
		}

		$salida.="</tbody></table>";

	} else {

		$salida.="No hay datos";

	}

	echo $salida;

	$mysqli->close();

?>
