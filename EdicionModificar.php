<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
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
                </ul>
            </nav>            
        </div>
    </header>
	<center>
		<?php

			$isbn=$_REQUEST['isbn'];


			include("conexion.php");
			$query= "SELECT * FROM Edicion WHERE isbn='$isbn'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="EdicionModificar_proceso.php?isbn=<?php echo $row['isbn'];?>" method="POST">			
			<input type="text" REQUIRED name="codigotitulo" placeholder="codigo titulo..." value="<?php echo $row['codigotitulo']?>"/>
			<input type="text" REQUIRED name="numpaginas" placeholder="numpaginas..." value="<?php echo $row['numpaginas']?>"/>
			<input type="text" REQUIRED name="tamaño" placeholder="tamaño..." value="<?php echo $row['tamaño']?>"/>
			<input type="text" REQUIRED name="refedit" placeholder="ref edit..." value="<?php echo $row['refedit']?>"/>
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>