<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<center>
		<table>
			<thead>
				<tr>
					<th> <a href="formulario.php">Nuevo<a/></th>
					<th>Lista de Ediciones</th>
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
				while($row=$resultado-> fetch_assoc()){


				}
			?>
				<tr>
					<td><?php echo $row['isbn']?>;</td>
					<td><?php echo $row['codigo titulo']?>;</td>
					<td><?php echo $row['numero paginas']?>;</td>
					<td><?php echo $row['tamaño']?>;</td>
					<td><?php echo $row['ref editorial']?>;</td>
				</tr>

			</tbody>
		</table>
	</center>

</body>
</html>