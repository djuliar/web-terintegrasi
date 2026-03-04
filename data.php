<?php
include 'koneksi.php';

$query = "SELECT jurusan, COUNT(*) as total FROM mahasiswa GROUP BY jurusan ORDER BY jurusan ASC";
$result = mysqli_query($conn, $query);

$data = [];
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);
?>