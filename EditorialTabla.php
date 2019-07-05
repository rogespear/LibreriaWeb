<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<center>
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

</body>
</html>