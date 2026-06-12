<?php
include "header.php";
?>

<link rel="stylesheet" href="Style/cssstyle.css">
<section>
    <div id="login">
        <form action="sv_login.php" method="post">
            <div class="input">
                <input type="text" name="username" placeholder="username">
            </div>

            <div class="input">
                <input type="password" name="password" placeholder="password">
            </div>

            <div class="SubmitButton">
                <button type="submit">login</button>
            </div>
            
        </form>
    </div>
</section>