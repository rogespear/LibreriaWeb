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

			$id=$_REQUEST['id'];

			include("conexion.php");
			$query= "SELECT * FROM ejemplar WHERE id='$id'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="EjemplarModificar_proceso.php?id=<?php echo $row['id'];?>" method="POST">			
			<input type="text" REQUIRED name="precio" placeholder="precio..." value="<?php echo $row['precio']?>"/>
			<input type="text" REQUIRED name="estado" placeholder="estado (Vendido/Disponible)..." value="<?php echo $row['estado']?>"/>			
		<input type="submit" value="aceptar" />	

		</form>	

	</center>
</body>
</html>