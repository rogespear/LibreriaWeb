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
					<li><a href="InfoTabla.php">Informacion de Compras</a></li>
                </ul>
            </nav>            
        </div>
    </header>
	<center class="center">
		<table border="3">			
			<tbody>
				<tr>				
				<td>Nombre Cliente</td>
				<td>Costo Compra</td>
				<td>Fecha de Compra</td>
				<td>Id Ejemplar</td>									
				</tr>

			<?php
                
				include("conexion.php");
				$id = $_POST['id'];
                $consultaSQL7 = "SELECT Cliente.nombre, compra.costo, compra.fecha, ejemplar.id "
                    . "FROM cliente INNER JOIN compra on cliente.rut = compra.refclient "
                    . "INNER JOIN ejemplar ON ejemplar.id = compra.refejemp WHERE id = '$id'";
                $res_consultaSQL7 = pg_query($conexion,$consultaSQL7);
				while($row = pg_fetch_assoc($res_consultaSQL7)){
			?>
				<tr>					
					<td><?php echo $row['nombre']?></td>
					<td><?php echo $row['costo']?></td>
					<td><?php echo $row['fecha']?></td>
					<td><?php echo $row['id']?></td>										
				</tr>
                
			<?php 
				}
			 ?>

			</tbody>
		</table>
        <div>
        <nav class= "navigation">
            <ul>
                <li><a href="InfoParFormularioCliente.php">Buscar por Cliente</a></li>
                <li><a href="InfoParFormularioCompra.php">Buscar por Fecha de Compra</a></li>
                <li><a href="InfoParFormularioCliente.php">Buscar por ID Ejemplar</a></li>                   
            </ul>    
        </nav>
        </div>
	</center>
    
	<footer class="footer">
        <div class="container">
            <p>Marcelo Mu&ntildeoz</p>
            <p>Camilo Villalobos</p>
        </div>
    </footer>			
</body>
</html>