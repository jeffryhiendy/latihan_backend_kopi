<?php
include "security.php";

$username = $_SESSION['username'];
echo "welcome, " . $username;
?>

<br>
<a href="courses/index.php">Manajemen Kelas</a>
<br>
<a href="registrations/index.php">Manajemen Pendaftaran</a>
<br>
<a href="logout.php">Logout</a>