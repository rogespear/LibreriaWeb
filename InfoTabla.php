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
			<thead>
				<tr>					
					<th colspan="7">Lista de Informacion de Compras</th>
				</tr>
			</thead>			
			<tbody>
				<tr>				
				<td>Nombre Cliente</td>
				<td>Costo Compra</td>
				<td>Fecha de Compra</td>
				<td>Id Ejemplar</td>									
				</tr>

			<?php
				include("conexion.php");
				$consultaSQL6 = "SELECT Cliente.nombre, compra.costo, compra.fecha, ejemplar.id"
                . " FROM cliente INNER JOIN compra ON cliente.rut = compra.refclient "
                . "INNER JOIN ejemplar ON ejemplar.id = compra.refejemp";
                $res_consultaSQL6 = pg_query($conexion,$consultaSQL6);
				while($row = pg_fetch_assoc($res_consultaSQL6)){
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
			<p>
				<b>Busqueda por Parametros</b>
			</p>		
			<nav class= "navigation">			
				<ul>
					<li><a href="InfoParFormularioCliente.php">Buscar por Cliente</a></li>
					<li><a href="InfoParFormularioCompra.php">Buscar por Fecha de Compra</a></li>
					<li><a href="InfoParFormularioEjemplar.php">Buscar por ID Ejemplar</a></li>                   
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