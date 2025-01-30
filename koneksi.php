<?php
$dbname = 'db_pmb_kelompok';
$host = 'localhost';
$password = '';
$username = 'root';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
} else {
    echo "";
}
?>