<?php
// Informasi koneksi database
$servername = "localhost";
$username = "pengguna";
$password = "katasandi";
$dbname = "namadatabase";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Contoh query SELECT
$sql = "SELECT id, nama, email FROM pengguna";
$result = $conn->query($sql);

// Memproses hasil query
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Tidak ada data ditemukan";
}

// Menutup koneksi
$conn->close();
?>
