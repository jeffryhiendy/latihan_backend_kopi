<?php
include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'] ?? '';

if($id == ''){
    header("Location: index.php");
    exit;
}

$sql = "select * from courses where id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if(!$data){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    <a href="index.php">Kembali</a>
    
    <br><br>
    <form action="ubah.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Judul Course</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($data['name']); ?>">
        <br><br> 

        <label>Deskripsi</label><br>
        <textarea name="description" rows="5" cols="40"><?= htmlspecialchars($data['description']); ?></textarea>
        <br><br>

        <label>Harga</label><br>
        <input type="number" name="price" value="<?= htmlspecialchars($data['price']); ?>">
        <br><br>

        <button type="submit" name="ubah">Ubah</button>
    </form>
</body>
</html>