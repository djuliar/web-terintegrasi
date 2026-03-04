<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="proses.php" method="POST">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>
        
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Jurusan:</label><br>
        <select name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknologi Rekayasa Komputer">Teknologi Rekayasa Komputer</option>
            <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>
