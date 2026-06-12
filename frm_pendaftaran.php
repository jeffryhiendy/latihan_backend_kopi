<?php include "koneksi.php"; ?>

<link rel="stylesheet" href="Style/cssstyle.css">
<section>
    <div id="pendaftaran">
        <form action="sv_pendaftaran.php" method="post">
            <div class="input">
                <label>Nama Lengkap</label>
                <input type="text" name="full_name" placeholder="Masukkan nama lengkap">
            </div>
            <div class="input">
                <label>Email</label>
                <input type="email" name="email" placeholder="contoh@email.com">
            <div>
            <div class="input">
                <label>Nomor Whatsapp</label>
                <input type="text" name="phone_number" placeholder="0123456789">
            <div>
            <div class="input">
                <label>Pilih Kelas</label>
                <select name="course_id">
                    <option value="">-- Pilih Kelas --</option>
                    <?php
                    $sql = "select * from courses";
                    $query = mysqli_query($conn, $sql);
                    while ($result = mysqli_fetch_array($query)) {
                        $id = $result['id'];
                        $course_name = $result['name'];
                        $course_price = $result['price'];
                        ?>

                        <option value="<?= $id ?>">
                             <?= $course_name ?> - Rp<?= number_format($course_price, 0, ',', '.') ?>
                        </option>

                    <?php
                    }
                    ?>
                </select>
            </div>
                
            <div class="input">
                <label>Jumlah Peserta</label>
                <input type="number" name="participant_count" min="1" value="1">
            </div>
                
            <button type="submit" name="daftar">Daftar Sekarang</button>
        </form>
    </div>
</section>