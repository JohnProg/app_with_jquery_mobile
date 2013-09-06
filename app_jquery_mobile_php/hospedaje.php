<?php 
	include('conexion.php');
	$id = $_GET['id'];
	$sql = 'select * from hospedaje where zona='.$id;
	$data = mysql_query($sql, $conexion);
	$row = mysql_fetch_array($data);
?>
<!doctype html>
	<html lang="es">
	<head>
		<meta name=”viewport” content=”width=device-width, initial-scale=1.0, maximum-scale=2″ />
		<title>Document</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="js/jquerymobile/jquery.mobile-1.2.1.css">
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script src="js/jquerymobile/jquery.mobile-1.2.1.js" type="text/javascript"></script>
	</head>
	<body>
		<div data-role="page" id="pagina1">
			<div data-role="header" data-theme="a" data-position="fixed">
				<a href="#" data-role="none"><img src="http://i1.ytimg.com/i/LXRGxAzeaLDGaOphqapzmg/1.jpg?v=515128be" width=35></a>
				<h3>Inicio - Perú</h3>
				<a href="#" data-role="none"><img src="http://i1.ytimg.com/i/LXRGxAzeaLDGaOphqapzmg/1.jpg?v=515128be" width=35></a>
			</div>
			<div data-role="content">
				<ul data-role="listview" data-filter="true" data-filter-placeholder="Busqueda...">
					<?php 
						while ($row = mysql_fetch_array($data)) {
							echo '<li>
								<a href="detalles_zona.php?id='.$row['id'].'" data-transition="slideup">
									<img src="'.$row['foto'].'">
									<h3>'.utf8_encode($row['titulo_zona']).'</h3>
									<p>'.utf8_encode($row['telefono']).'</p>
								</a>
							</li>';
						}
					?>				
				</ul>
			</div>
			<div data-role="footer" data-position="fixed" data-theme="a">
				<div data-role="navbar">
					<ul>
						<li>
							<a href="index.php" data-transition="slide" data-icon="back" data-rel="back">Regresar</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	</html>	