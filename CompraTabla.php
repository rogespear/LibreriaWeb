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
	<center center class="center">
		<table border="3">
			<thead>
				<tr>
					<th colspan="1"> <a href="CompraFormulario.php">Nuevo<a/></th>
					<th colspan="7">Lista de Compras</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>refejemp</td>
				<td>refclient</td>
				<td>fecha</td>
				<td>costo</td>
				
				
				</tr>

			<?php
				include("conexion.php");
				$query= "SELECT * FROM Compra";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>
				<tr>
					<td><?php echo $row['refejemp']?></td>
					<td><?php echo $row['refclient']?></td>
					<td><?php echo $row['fecha']?></td>
					<td><?php echo $row['costo']?></td>
					
					<td><a href="EdicionModificar.php?refejemp=<?php echo $row['refejemp']; ?>">modificar<a/></td>
					<td><a href="EdicionEliminar.php?refejemp=<?php echo $row['refejemp']; ?>">eliminar<a/></td>
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