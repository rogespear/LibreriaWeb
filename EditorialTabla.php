<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
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
	<center class="center">
		<table border="3">
			<thead>
				<tr>
					<th colspan="1"> <a href="EditorialFormulario.php">Nuevo<a/></th>
					<th colspan="7">Lista de Editoriales</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>prueba</td>
				<td>codigo</td>
				<td>nombre</td>
				<td>telefono</td>
				<td>direccion</td>				
				<td>modificar</td>
				<td>eliminar</td>			
				</tr>

			<?php
				include("conexion.php");
				$query= "SELECT * FROM Editorial";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>
				<tr>					
					<td><?php echo $row['codigo']?></td>
					<td><?php echo $row['nombre']?></td>
					<td><?php echo $row['telefono']?></td>
					<td><?php echo $row['direccion']?></td>					
					<td><a href="EditorialModificar.php?codigo=<?php echo $row['codigo']; ?>">modificar<a/></td>
					<td><a href="EditorialEliminar.php?codigo=<?php echo $row['codigo']; ?>">eliminar<a/></td>
					<td><a href= "EditorialEdicionesRelacionadas.php?codigo=<?php echo $row['codigo']; ?>">ver Ediciones<a/></td>
				</tr>

			<?php 
				}
			 ?>

			</tbody>
		</table>
	</center>
	<footer class="footer">
        <div class="container">
            <p>Marcelo Mu&ntildeoz</p>
            <p>Camilo Villalobos</p>
        </div>
    </footer>			
</body>
</html>