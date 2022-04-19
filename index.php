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
    <script src="app2.js"></script>
    <script src="peticion.js"></script>
</head>
<body>

    <div data-role="page" data-theme="a" id="login">
        <div data-role="header" data-position="fixed">
			<h1>Bienvenido</h1>
            <a href="#registro" data-role="button" data-theme="a" data-icon="gear">Registrar</a>
		</div>
        <div data-role="content" data-theme="a">
            <p style="text-align:justify;">Login</p>
            <label for="usuario"></label>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario">
            <label for="contrasena"></label>
			<input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
			<button class="btniniciar" id="btniniciar">Iniciar Sesión</button>
        </div>
    </div>

    <div data-role="page" date-theme="a" id="registro">
        <div data-role="header" data-position="fixed">
			<h1>Bienvenido</h1>
            <a href="#login" data-role="button" data-theme="a" data-icon="gear">Login</a>
		</div>
        <div data-role="content" data-theme="a">
            <p style="text-align:justify;">Registro</p>
            <label for="usuariox"></label>
			<input type="text" name="usuariox" id="usuariox" placeholder="Usuario">
            <label for="contrasenax"></label>
			<input type="password" name="contrasenax" id="contrasenax" placeholder="Contraseña">
            <label for="correo"></label>
			<input type="text" name="correo" id="correo" placeholder="Correo">
            <button class="btnregistro"  id="btnregistro">Registrarse</button>
        </div>
    </div>

    <div data-role="page" date-theme="a" id="userc">
        <div data-role="header" data-position="fixed">
			<h1>Usuario</h1>
            <a href="#page1" data-role="button" data-theme="a" data-icon="gear" class="btnhome" id="btnhome">HOME</a>
		</div>
        <div data-role="content" data-theme="a">
            <label for="idx1">Id</label>
			<input type="text" name="idx1" id="idx1" placeholder="Id" value="" readonly="readonly">
            <label for="usuariox1">Usuario</label>
			<input type="text" name="usuariox1" id="usuariox1" placeholder="Usuario" value="" readonly="readonly">
            <label for="contrasenax1">Nueva Contraseña:</label>
			<input type="password" name="contrasenax1" id="contrasenax1" placeholder="Contraseña">
            <button class="btncontra"  id="btncontra">Cambiar Contraseña</button>
        </div>
        <div data-role="footer" data-theme="a" data-position="fixed" data-id="fijo">
            <div data-role="navbar">
                <ul>
                    <li><a href="#page1" class="homeBTN">HOME</a></li>
                    <li><a href="#page3" class="PRODUCTOSBTN">PRODUCTOS</a></li>
                    <li><a href="#userc" class="USUARIOC">USUARIO</a></li>
                </ul>
            </div>
		</div>
    </div>

    <div data-role="page" date-theme="a" id="page1">
        <div data-role="header" data-position="fixed">
			<h1>HOME</h1>
            <a href="#login" data-role="button" data-theme="a" data-icon="gear" class="btncerrar" id="btncerrar">Cerrar Sesión</a>
		</div>
        <div data-role="content" data-theme="a">
            <a href="#page2" data-role="button" data-theme="a">Crear Producto Nuevo</a>
        </div>
        <div data-role="footer" data-theme="a" data-position="fixed" data-id="fijo">
            <div data-role="navbar">
                <ul>
                    <li><a href="#page1" class="homeBTN">HOME</a></li>
                    <li><a href="#page3" class="PRODUCTOSBTN">PRODUCTOS</a></li>
                    <li><a href="#userc" class="USUARIOC">USUARIO</a></li>
                </ul>
            </div>
		</div>
    </div>

    <div data-role="page" date-theme="a" id="page2">
        <div data-role="header" data-position="fixed">
			<h1>Registrar Producto</h1>
            <a href="#page1" data-role="button" data-theme="a" data-icon="gear" class="btnhome" id="btnhome">HOME</a>
		</div>
        <div data-role="content" data-theme="a">
		    <input type="text" name="barcode" id="barcode" placeholder="Ingresar Código aquí">
			<input type="text" name="p_name" id="p_name" placeholder="Nombre del producto">
			<select name="p_type" id="p_type">
				<option>Seleccione una Opción</option>
				<option>Frutas, verduras y hortalizas</option>
				<option>Bebidas Espirituosas</option>
                <option>Bebidas</option>
				<option>Dulces y Golocinas</option>
                <option>Productos de limpieza</option>
                <option>Embutidos y Lacteos</option>
                <option>Salsas</option>
                <option>Enlatados</option>
                <option>Productos de Cocina</option>
                <option>Aseo Personal</option>
			</select>
			<button class="btnanadir" name="btnanadir" id="btnanadir" value="Enviar">Añadir Producto</button>
        </div>
    </div>

    <div data-role="page" id="page3">
        <div data-role="header" date-theme="a" data-position="fixed">
			<h1>Productos</h1>
		</div>
        <div>
            
            <div data-role="content" data-theme="a">
                <label for="caja_busqueda"></label>
                <input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar:"></input>
            </div>

            <div id="datos" class="tabla">

            </div>
        </div>
        <div data-role="footer" data-theme="a" data-position="fixed" data-id="fijo">
            <div data-role="navbar">
                <ul>
                    <li><a href="#page1" class="homeBTN">HOME</a></li>
                    <li><a href="#page3" class="PRODUCTOSBTN">PRODUCTOS</a></li>
                    <li><a href="#userc" class="USUARIOC">USUARIO</a></li>
                </ul>
            </div>
		</div>
    </div>

</body>
</html>