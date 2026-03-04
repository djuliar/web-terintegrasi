<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM mahasiswa limit 5");

echo "<ol>";
while($row = mysqli_fetch_assoc($result)){
    echo "<li>".$row['nim']." - ".$row['nama']." (".$row['jurusan'].")</li>";
}
echo "</ol>";

?>