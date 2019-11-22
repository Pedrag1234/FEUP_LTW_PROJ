<?php

function draw_login(){
    ?>
    <div>
    <form action="/search.php">
        <input type="text" name="username">
        <input type="text" name="password">
        <button type="submit">Log In</button>
        <a href="../mockup/index.php"> cancel</a>
    </form>
    </div>
    <?php
}

?>