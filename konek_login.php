<?php

require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$konek_sql = "SELECT * FROM perpus WHERE username = '$username' AND email = '$email' AND password = '$password'";

$hasil = mysqli_query($konek, $konek_sql);

if (mysqli_num_rows($hasil) > 0) {
    header("Location: dasbor.html");
} else {
    echo "<center><h1> email atau password yang anda masukan salah. Silahkan Login Kembali.</h1><button><strong><a href='login.php'>Login</strong></button></center>";
}

?>