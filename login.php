<?php
include "header.php";
?>

<link rel="stylesheet" href="Style/cssstyle.css">
<section id="login">
    <form action="sv_login.php" method="post">
        <div class="inputLogin">
            <input type="text" name="username" placeholder="username">
        </div>

        <div class="inputLogin">
            <input type="password" name="password" placeholder="password">
        </div>

        <div id="SubmitButtonLogin">
            <button type="submit">login</button>
        </div>
            
    </form>
</section>