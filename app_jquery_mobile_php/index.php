<?php 
	include('conexion.php');
	$sql = 'select * from zona_turistica';
	$data = mysql_query($sql, $conexion);
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
				<h3>Restaurante - Perú</h3>
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
									<p>'.utf8_encode($row['descripcion_espec']).'</p>
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
							<a href="#about" data-transition="pop" data-icon="info" data-rel="dialog">About This</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div data-role="page" id="about">
			<div data-role="header" data-theme="a" data-position="fixed">
				<h3>About This</h3>
			</div>
			<div data-role="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			</div>
		</div>
	</body>
	</html>	