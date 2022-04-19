<?php 
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $tipo=$_GET['tipo'];

    include("config.php");
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto Post</title>
	<link rel="stylesheet" href="themes/mis_temas.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
    <link href="estilos.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="peticionp.js"></script>
</head>
<body>

    <div data-role="page" date-theme="a" id="precios">
        <div data-role="header" data-position="fixed">
			<h1>Gráfico</h1>
            <a href="index.php#page1" data-role="button" data-theme="a" data-icon="gear" class="btnhome" id="btnhome">HOME</a>
		</div>
        <div data-role="content" data-theme="a">
            
            <label for="barcode3"></label>
            <input type="text" name="barcode3" id="barcode3" value="<?php echo $id ?>" readonly="readonly">
			<input type="text" name="p_name3" id="p_name3" value="<?php echo $nombre ?>" readonly="readonly">
        </div>
        <div class= "tabla">
            <table class = "tabla_datos">
                <thead>
                    <tr style='border-bottom: 1px solid #d6d6d6;'>
                        <th>Id</th>
                        <th>Fecha/Hora</th>
                        <th>Precio</th>
                    </tr>
                <thead><tbody style='border-bottom: 1px solid #d6d6d6;'>
                        <?php
                            $consulta = "SELECT id, fecha, precio FROM precios WHERE barcode LIKE '%$id%'";
                            $ejecutarConsulta = mysqli_query($db, $consulta);
                            $verFilas = mysqli_num_rows ($ejecutarConsulta);
                            $fila = mysqli_fetch_array($ejecutarConsulta);
                
                            if(!$ejecutarConsulta){
                                echo"Error al consultar los datos";
                            }else{
                                if($verFilas < 1){
                                    echo"<tr><td>Sin Registros</td></tr>";
                                }else{
                                    for($i=0; $i<=$fila; $i++){
                                        echo'<tr style="border-bottom: 1px solid #d6d6d6;">
                                                <td>'.$fila[0].'</td>
                                                <td>'.$fila[1].'</td>
                                                <td>'.$fila[2].'</td>
                                             </tr>
                                        ';
                                        $fila = mysqli_fetch_array($ejecutarConsulta);
                                    }
                                }
                            }
                        ?>
                </tbody></table>
    </div>

</body>
</html>