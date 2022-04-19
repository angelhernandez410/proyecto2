<?php 
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $tipo=$_GET['tipo'];
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
    <script src="app.js"></script>
    <script src="peticionp.js"></script>
</head>
<body>

    <div data-role="page" date-theme="a" id="informacion">
        <div data-role="header" data-position="fixed">
			<h1>Producto</h1>
            <a href="index.php#page1" data-role="button" data-theme="a" data-icon="gear" class="btnhome" id="btnhome">HOME</a>
		</div>
        <div data-role="content" data-theme="a">
            <input type="text" name="barcode2" id="barcode2" value="<?php echo $id ?>" readonly="readonly">
			<input type="text" name="p_name2" id="p_name2" value="<?php echo $nombre ?>" readonly="readonly">
            <input type="text" name="p_type2" id="p_type2" value="<?php echo $tipo ?>" style="text-align: center;" readonly="readonly">
            <a href="actprecios.php?id=<?php echo $id ?>&nombre=<?php echo $nombre ?>&tipo=<?php echo $tipo ?>" data-role="button" data-theme="a" class="precionew" id="precionew">Añadir Precio Nuevo</a>
            <a href="precios.php?id=<?php echo $id ?>&nombre=<?php echo $nombre ?>&tipo=<?php echo $tipo ?>" data-role="button" data-theme="a" class="evolucion" id="evolucion">Ver evolución de precios</a>
        </div>
    </div>

</body>
</html>