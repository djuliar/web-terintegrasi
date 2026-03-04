<?php
include "config/Database.php";
include "models/Mahasiswa.php";

$db = new Database();
$conn = $db->connect();

$mhs = new Mahasiswa($conn);
$result = $mhs->read();

while($row = $result->fetch_assoc()){
    echo $row['nim'] . ' - ' . $row['nama']."<br>";
}
?>