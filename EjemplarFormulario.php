<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="header">
		<div class="container logo-nav-container">
			<a href="#" class="logo">LIBRERIA</a>
            <nav class="navigation">
                <ul>
                    <li><a href="ClienteTabla.php">Clientes</a></li>
                    <li><a href="EjemplarTabla.php">Ejemplares</a></li>
                    <li><a href="EdicionTabla.php">Ediciones</a></li>
                    <li><a href="EditorialTabla.php">Editoriales</a></li>
                    <li><a href="CompraTabla.php">Compras</a></li>
                    <li><a href="TituloTabla.php">Titulos</a></li>
					<li><a href="InfoTabla.php">Informacion de Compras</a></li>
                </ul>
            </nav>            
        </div>
    </header>
	<center>	
		<form action="EjemplarGuardar.php" method="POST">
			<input type="text" REQUIRED name="id" placeholder="id..." value""/>
			<input type="text" REQUIRED name="precio" placeholder="precio..." value""/>
			<input type="text" REQUIRED name="estado" placeholder="estado (Disponible/Vendido)..." value""/>			
		<input type="submit" value="aceptar" />			
		</form>				
	</center>
</body>
</html>