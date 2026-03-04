<?php
class Mahasiswa {
    private $conn;
    private $table = "mahasiswa";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($nim, $nama, $jurusan) {
        $query = "INSERT INTO $this->table (nim, nama, jurusan)
                  VALUES ('$nim', '$nama', '$jurusan')";
        return $this->conn->query($query);
    }

    public function read() {
        $query = "SELECT * FROM $this->table ORDER BY nim DESC";
        return $this->conn->query($query);
    }

    public function update($id, $nama) {
        $query = "UPDATE $this->table
                  SET nama='$nama'
                  WHERE id=$id";
        return $this->conn->query($query);
    }

    public function delete($id) {
        $query = "DELETE FROM $this->table WHERE id=$id";
        return $this->conn->query($query);
    }
}
?>