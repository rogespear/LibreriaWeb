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
					<th colspan="1"> <a href="EdicionFormulario.php">Nuevo<a/></th>
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
				include("conexion.php");
				$query= "SELECT * FROM Edicion";
				$resultado= pg_query($conexion,$query);
				while($row = pg_fetch_assoc($resultado)){
			?>
				<tr>
					<td><?php echo $row['isbn']?></td>
					<td><?php echo $row['codigotitulo']?></td>
					<td><?php echo $row['numpaginas']?></td>
					<td><?php echo $row['tamaño']?></td>
					<td><?php echo $row['refedit']?></td>
					<td><a href="EdicionModificar.php?isbn=<?php echo $row['isbn']; ?>">modificar<a/></td>
					<td><a href="EdicionEliminar.php?isbn=<?php echo $row['isbn']; ?>">eliminar<a/></td>
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