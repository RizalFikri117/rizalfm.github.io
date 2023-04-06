<?php 

require "koneksi.php";
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$konek_sql = "INSERT INTO perpus (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($konek, $konek_sql)) {
    header("Location: login.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($konek);
}
?>