<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<section class="py-5">
		<div class="container">
			<?php
			include 'koneksi.php';

			$result = mysqli_query($conn, "SELECT * FROM mahasiswa limit 5");

			while($row = mysqli_fetch_assoc($result)){
				echo "<dl>";
				echo "<dt>Nama</dt><dd>".$row['nama']."</dd>";
				echo "<dt>NIM</dt><dd>".$row['nim']."</dd>";
				echo "<dt>Jurusan</dt><dd>".$row['jurusan']."</dd>";
				echo "</dl><hr>";
			}
			?>
		</div>
	</section>
</body>
</html>