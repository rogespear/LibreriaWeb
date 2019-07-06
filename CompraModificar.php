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

			$refejemp=$_REQUEST['refejemp'];


			include("conexion.php");
			$query= "SELECT * FROM Compra WHERE refejemp='$refejemp'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="CompraModificar_proceso.php?refejemp=<?php echo $row['refejemp'];?>" method="POST">			
			<input type="text" REQUIRED name="refclient" placeholder="refclient..." value="<?php echo $row['refclient']?>"/>
			<input type="text" REQUIRED name="fecha" placeholder="fecha..." value="<?php echo $row['fecha']?>"/>
			<input type="text" REQUIRED name="costo" placeholder="costo..." value="<?php echo $row['costo']?>"/>
			
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>