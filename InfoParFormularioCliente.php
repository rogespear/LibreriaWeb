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
		<form action="InfoParClienteTabla.php" method="POST">
        <input type="text" REQUIRED name="cliente" placeholder="Nombre de Cliente..." value""/>						
		<input type="submit" value="aceptar" />
			
		</form>			
	</center>
</body>
</html>