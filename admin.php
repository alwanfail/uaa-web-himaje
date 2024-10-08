<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "yunitahimaje"; // ganti dengan username database Anda
$password = "password"; // ganti dengan password database Anda
$dbname = "komentar";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT nama, prodi, kritik, timestamp FROM comment";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #50b3a2;
            color: #ffffff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }
        header a:hover {
            color: #cccccc;
            font-weight: bold;
        }
        .comments {
            margin-top: 20px;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        .comment {
            border-bottom: 1px solid #cccccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .comment:last-child {
            border-bottom: none;
        }
        .comment p {
            margin: 0;
        }
        .comment .meta {
            color: #666666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Kritik dan Saran untuk HIMAJE</h1>
            </div>

 
        </div>
    </header>

    <div class="container">
        <div class="comments">
            <h2>Daftar Komentar</h2>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="comment">';
                    echo '<p><b>Nama:</b>' . htmlspecialchars($row["nama"]) . '</p>';
                    echo '<p><b>Prodi:</b> ' . htmlspecialchars($row["prodi"]) . '</p>';
                    echo '<p><b>Kritik:</b> ' . nl2br(htmlspecialchars($row["kritik"])) . '</p>';
                    echo '<p class="meta"><b>Waktu:</b> ' . htmlspecialchars($row["timestamp"]) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>Tidak ada komentar.</p>';
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
