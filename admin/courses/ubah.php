<?php
include "../security.php";
include "../../koneksi.php";

if(isset($_POST['ubah'])){
    $id = trim($_POST['id']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = (int)$_POST['price'];

    if($title == '' || $description == '' || $price <= 0){
        $error = "Semua field wajib diisi dengan benar.";
    }
    else{
        $sql = "update courses set name='$title', description='$description', price='$price' where id='$id'";
        $query = mysqli_query($conn, $sql);

        if($query){
            header("Location: index.php");
            exit;
        }
        else{
            $error = "Data gagal disimpan.";
        }
    }
}
?>