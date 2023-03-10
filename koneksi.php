<html>
	<head>
	<title> KONEKSI KE DATABASE </title>
</head>
<body>
	<?php 
		$host = "localhost";
		$username = "root";
		$password = "";
		$database = "metodesaw";
		$koneksi = mysqli_connect($host, $username, $password, $database);

		if ($koneksi){
			echo "";
		} else { 
			echo "Server tidak terhubung ";
		}

		?>
</body>
</html>