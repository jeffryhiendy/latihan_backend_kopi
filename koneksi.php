<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "jeffry_latihan_backend";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>