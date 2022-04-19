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
    <script src="app2.js"></script>
</head>
<body>

    <div data-role="page" date-theme="a" id="precios">
        <div data-role="header" data-position="fixed">
			<h1>Añadir Precio Nuevo</h1>
            <a href="index.php#page1" data-role="button" data-theme="a" data-icon="gear" class="btnhome" id="btnhome">HOME</a>
		</div>
        <div data-role="content" data-theme="a">
            <label for="barcode">Código de barras</label>
            <input type="text" name="barcode" id="barcode" readonly="readonly" value="<?php echo $id ?>">
            <label for="precio1">Nuevo Precio</label>
            <input type="text" name="precio1" id="precio1" >
            <button class="btnnew" id="btnnew">Añadir</button>
        </div>

    </div>

</body>
</html>