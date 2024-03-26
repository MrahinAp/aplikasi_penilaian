<?php 
// inisialisasi session
session_start();

// mengecek session
if(!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<center>
<h2>Selamat datang</h2>
</center>


<table class="table table-dark table-striped">
    <tr>
        <th>username</th>
        <th>Nim</th>
        <th>Prodi</th>
        <th>Kelas</th>
    </tr>
    <?php
    // Konfigurasi koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "coba1";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query SQL untuk mengambil data
        
    $sql = "SELECT username, nim, prodi, kelas  FROM user2 where nim=300308";
    $result = $conn->query($sql);

    // Memeriksa apakah data berhasil diambil
    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["nim"] . "</td>";
            echo "<td>" . $row["prodi"] . "</td>";
            echo "<td>" . $row["kelas"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>0 hasil</td></tr>";
    }

    // Menutup koneksi
    $conn->close();
    ?>
</>
</table>

<button onclick="location.href='Soal/form1.php';">Selanjutnya</button>

</body>
</html>
