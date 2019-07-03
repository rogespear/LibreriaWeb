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
					<th colspan="1"> <a href="formulario.php">Nuevo<a/></th>
					<th colspan="7">Lista de Ediciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>ID</td>
				<td>Precio</td>
				<td>Estado</td>				
				<td>modificar</td>
				<td>eliminar</td>			
				</tr>

			<?php
				include("conexion.php");
				$query= "SELECT * FROM ejemplar";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>

				<tr>
					<td><?php echo $row['id']?>;</td>
					<td><?php echo $row['precio']?>;</td>
					<td><?php echo $row['estado']?>;</td>					
					<td><a href="modificarEjemplar.php?isbn=<?php echo $row['id']; ?>">modificar<a/></td>
					<td><a href="eliminarEjemplar.php?isbn=<?php echo $row['id']; ?>">eliminar<a/></td>
				</tr>

			<?php 
				}
			 ?>
				
			
				

			</tbody>
		</table>
	</center>

</body>
</html>