<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dabra</title>
</head>
<body>
	<div class="login-page">
	<?php 
		$file = $_GET['file'];

		$ssl_conn = ftp_ssl_connect("ftp.dabra.mx");
		$ftp_dir = ftp_pwd($ssl_conn);

		if(ftp_get($ssl_conn, "/home/david/Descargas/$file", $file, FTP_BINARY)) {
			header("Location: ftp.php");
		} else {
			echo "<p>Error al descargar</p>";
			echo "<a href="ftp.php">Volver</a>";
		}
	?>
	</div>
</body>
</html>