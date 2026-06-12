<?php
include "koneksi.php";
include "header.php";
include "admin\security.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/cssstyle.css">
</head>

<body>
    <section>
        <div id="pengenalan">
            <div id="About">
                <h2>Tentang Program</h2>
                <p>Kelas Kopi Online adalah program pelatihan sederhana untuk pemula yang ingin belajar teknik dasar menyeduh kopi, membuat latte art, dan memahami peluang bisnis kopi rumahan.</p>
            </div>

            <div id="Kelas">
                <h2>Pilihan Kelas</h2>

                <div class="cards">
                    <?php
                    $sql = "select * from courses";
                    $query = mysqli_query($conn, $sql);
                    while ($result = mysqli_fetch_array($query)) {
                    ?>
                        <div class="card">
                            <h3><?= $result['name'] ?></h3>
                            <p>
                                <?= $result['description'] ?>
                            </p>
                            <strong>Rp <?= number_format($result['price'], 0, ',', '.') ?></strong>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        
    </section>

    <?php include "frm_pendaftaran.php"; ?>
</body>

</html>