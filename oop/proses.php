<?php
include "config/Database.php";
include "models/Mahasiswa.php";

$db = new Database();
$conn = $db->connect();

$mhs = new Mahasiswa($conn);

// Memproses data yang dikirim
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // Membuat objek dari class Mahasiswa
    $mhs->create($nim, $nama, $jurusan);
    
    echo "<h3>Data Berhasil Diterima:</h3>";
    $result = $mhs->read();

	while($row = $result->fetch_assoc()){
		echo $row['nim'] . ' - ' . $row['nama'] .  ' - ' . $row['jurusan'] . "<br>";
	}
} else {
    echo "Akses ditolak.";
}
?>