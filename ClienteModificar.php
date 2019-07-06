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

			$rut=$_REQUEST['rut'];


			include("conexion.php");
			$query= "SELECT * FROM Cliente WHERE rut='$rut'";
			$resultado= pg_query($conexion,$query);
			$row = pg_fetch_assoc($resultado);
		?>
		<form action="ClienteModificar_proceso.php?rut=<?php echo $row['rut'];?>" method="POST">			
			<input type="text" REQUIRED name="nombre" placeholder="nombre..." value="<?php echo $row['nombre']?>"/>
			<input type="text" REQUIRED name="apellido" placeholder="apellido..." value="<?php echo $row['apellido']?>"/>
			<input type="text" REQUIRED name="telefono" placeholder="telefono..." value="<?php echo $row['telefono']?>"/>
			<input type="text" REQUIRED name="direccion" placeholder="direccion..." value="<?php echo $row['direccion']?>"/>
		<input type="submit" value="aceptar" />
			
		</form>
		
		
	</center>
</body>
</html>