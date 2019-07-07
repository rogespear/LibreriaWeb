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
		<form action="CompraGuardar.php" method="POST">
			<input type="text" REQUIRED name="refejemp" placeholder="refejemplar..." value""/>
			<input type="text" REQUIRED name="refclient" placeholder="refclient..." value""/>
			<input type="text" REQUIRED name="fecha" placeholder="fecha..." value""/>
			<input type="text" REQUIRED name="costo" placeholder="costo..." value""/>
			
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>