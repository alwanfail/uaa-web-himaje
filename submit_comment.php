<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "komentar";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kritik = $_POST['kritik'];

$sql = "INSERT INTO comment (nama, prodi, kritik) VALUES ('$nama', '$prodi', '$kritik')";

if ($conn->query($sql) === TRUE) {
    echo "Komentar berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

