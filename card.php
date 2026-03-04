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
			echo "<div class='row'>";
			while($row = mysqli_fetch_assoc($result)){
				echo "
				<div class='col-md-4 mb-3'>
					<div class='card shadow'>
						<div class='card-body'>
							<h5 class='card-title'>".$row['nama']."</h5>
							<p class='card-text'>
								NIM: ".$row['nim']."<br>
								Jurusan: ".$row['jurusan']."
							</p>
						</div>
					</div>
				</div>";
			}
			echo "</div>";
			?>
		</div>
	</section>
</body>
</html>