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
					<th colspan="7">Lista de Titulos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>Codigo</td>
				<td>Nombre</td>									
				</tr>

			<?php
				include("conexion.php");
				$query= "SELECT * FROM titulo";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>
				<tr>
					<td><?php echo $row['codigo']?></td>
					<td><?php echo $row['nombre']?></td>					
				</tr>
			<?php 
				}
			 ?>											
			</tbody>
		</table>
	</center>

</body>
</html>