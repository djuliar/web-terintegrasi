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

			$color = ['primary','secondary','info','success','danger','warning'];

			// echo $color[0];

			$result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY RAND() limit 6");

			$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
			
			foreach ($all_rows as $key => $row) {
				echo "<h3><span class='badge bg-".$color[$key]."'>".$row['jurusan']."</span></h3>";
			}
			?>
		</div>
	</section>
</body>
</html>