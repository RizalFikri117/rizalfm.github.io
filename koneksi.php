<?php
$server ='localhost';
$database = 'db_perpustakaan';
$user ='root';
$password ='';

$konek = mysqli_connect($server, $user, $password, $database);

if (!$konek) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil.";
}
?>