<?php 
	include('conexion.php');
	$id = $_GET['id'];
	$sql = 'select * from zona_turistica where id='.$id;
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
		<style type="text/css">
			.img_main{
				position: fixed;
				width: 100%;
				height: 12em;
				display: block;
			}
			.main_content{
				margin-top: 12em;
			}
		</style>
	</head>
	<body>
		<div data-role="page" id="pagina1">
			<div data-role="header" data-theme="a" data-position="fixed">
				<a href="#" data-role="none"><img src="http://i1.ytimg.com/i/LXRGxAzeaLDGaOphqapzmg/1.jpg?v=515128be" width=35></a>
				<h3><?php echo $row['titulo_zona']; ?></h3>
				<a href="#" data-role="none"><img src="http://i1.ytimg.com/i/LXRGxAzeaLDGaOphqapzmg/1.jpg?v=515128be" width=35></a>
			</div>
			<img src="<?php echo $row['foto']; ?>" class="img_main" data-role="none">
			<div class="main_content" data-role="content">
				
				<ul data-role="listview" data-dividertheme="a">
					<li data-role="list-divider">
						<span><?php echo utf8_encode($row['descripcion_espec']); ?></span>
					</li>	
					<li data-role="fieldcontain"></li>	
					<li>
						<a href="mas_info.php?id=<?php echo $row['id']; ?>" data-transition="flip">
							<img src="<?php echo $row['foto']; ?>" width=140>
							<h3>Mas sobre <?php echo utf8_encode($row['titulo_zona']); ?></h3>
							<p><?php echo utf8_encode($row['titulo_zona']); ?></p>
						</a>
					</li>
					<li>
						<a href="restaurante.php?id=<?php echo $row['id']; ?>" data-transition="slideup">
							<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRn7z2qEdkMHm7S1apF-bZI6olCFOX_MiLU4rGphJatIMg3JSoL">
							<h3>Restaurantes</h3>
							<p>¿Donde Comer?</p>
						</a>
					</li>
					<li>
						<a href="hospedaje.php?id=<?php echo $row['id']; ?>" data-transition="pop">
							<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRT8H_0APBFxTIZ87KfGrBdFYC2BJ_ASz12_ACazSUahTacaDtrlA">
							<h3>Hospedajes</h3>
							<p>¿Donde Podemos Hospedarnos?</p>
						</a>
					</li>
					<li>
						<a href="turismo.php?id=<?php echo $row['id']; ?>" data-transition="flip">
							<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQNRNDUReWXTNCjxDNWsil1va2GpQPDabFh-BRO9zrIKoU-4VXcyA">
							<h3>Turismo</h3>
							<p>¿A Donde Ir?</p>
						</a>
					</li>
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