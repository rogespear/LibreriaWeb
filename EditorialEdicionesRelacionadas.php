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
				</tr>

			<?php
                $refedit=$_REQUEST['codigo'];
				include("conexion.php");
				$query= "SELECT * FROM Edicion WHERE refedit='$refedit'";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>
				<tr>
					<td><?php echo $row['isbn']?></td>
					<td><?php echo $row['codigotitulo']?></td>
					<td><?php echo $row['numpaginas']?></td>
					<td><?php echo $row['tamaño']?></td>
					<td><?php echo $row['refedit']?></td>					
				</tr>

			<?php 
				}
			 ?>
											
			</tbody>
		</table>
	</center>

</body>
</html>