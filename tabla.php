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
				<td>isbn</td>
				<td>codigo titulo</td>
				<td>numero paginas</td>
				<td>tamaño</td>
				<td>ref editorial</td>
				<td>modificar</td>
				<td>eliminar</td>			
				</tr>

			<?php
				include("conexion.php");
				$query= "SELECT * FROM Edicion";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>

				<tr>
					<td><?php echo $row['isbn']?>;</td>
					<td><?php echo $row['codigotitulo']?>;</td>
					<td><?php echo $row['numpaginas']?>;</td>
					<td><?php echo $row['tamaño']?>;</td>
					<td><?php echo $row['refedit']?>;</td>
					<td><a href="modificarEdicion.php?isbn=<?php echo $row['isbn']; ?>">modificar<a/></td>
					<td><a href="eliminarEdicion.php?isbn=<?php echo $row['isbn']; ?>">eliminar<a/></td>
				</tr>

			<?php 
				}
			 ?>
				
			
				

			</tbody>
		</table>
	</center>

</body>
</html>