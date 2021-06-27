<?php 
function ftp_get_filelist($con, $path){
	$files = array();
	$contents = ftp_rawlist ($con, $path);
	$a = 0;

	if(count($contents)){
		foreach($contents as $line){
			preg_match("#([drwx\-]+)([\s]+)([0-9]+)([\s]+)([0-9]+)([\s]+)([a-zA-Z0-9\.]+)([\s]+)([0-9]+)([\s]+)([a-zA-Z]+)([\s ]+)([0-9]+)([\s]+)([0-9]+):([0-9]+)([\s]+)([a-zA-Z0-9\.\-\_ ]+)#si", $line, $out);

			if($out[3] != 1 && ($out[18] == "." || $out[18] == "..")){
				// do nothing
			} else {
				$a++;
				$files[$a]['rights'] = $out[1];
				$files[$a]['type'] = $out[3] == 1 ? "file":"folder";
				$files[$a]['owner_id'] = $out[5];
				$files[$a]['owner'] = $out[7];
				$files[$a]['date_modified'] = $out[11]." ".$out[13] . " ".$out[13].":".$out[16]."";
				$files[$a]['name'] = $out[18];
			}
		}
	}
	return $files;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dabra</title>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<div class="login-page">
		<h3>Haz click para descargar</h3>
			
		<?php 
			$ssl_conn = ftp_ssl_connect("ftp.dabra.mx", 21, 90);
			$ftp_dir = ftp_pwd($ssl_conn);

			$files = ftp_get_filelist($ssl_conn, $ftp_dir);
			
			var_dump($ssl_conn);
			var_dump($ftp_dir);
			var_dump($files);

			foreach($files as $file) {
				$name = $file['name'];
				echo "<a href=\"download.php?file=$name\">$name</a>";
			}

			ftp_close($conn_id);
		 ?>
	</div>
</body>
</html>