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
		$ftp_user_name = "user1";
		$ftp_user_pass = "testftp";

		$ssl_conn = ftp_ssl_connect("ftp.dabra.mx", 21, 90);
		$login_result = ftp_login($ssl_conn, $ftp_user_name, $ftp_user_pass);
		$ftp_dir = ftp_pwd($ssl_conn);


		if(ftp_get($ssl_conn, "/home/david/Descargas/$file", $file, FTP_BINARY)) {
			header("Location: ftp.php");
		} else {
			echo "<p>Error al descargar</p>";
			echo "<a href="ftp.php">Volver</a>";
		}

		ftp_close($ssl_conn);
	?>
	</div>
</body>
</html>