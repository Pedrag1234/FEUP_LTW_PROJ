<?php
function draw_login() {?>
    <div id ="LoginForm">
        <div id=error>
            <?php 
                if (isset($_GET['error'])) { 
                    ?><h3><?php
                    echo $_GET['error']; 
                    ?></h3><?php
                }
            ?>
        </div>
        <form action="../actions/action_login.php" method="post">
            <label> Username
                <input type="text" name="Username" maxlength="20">
            </label>
            <label> Password
                <input type="password" name="Password" maxlength="40">
            <button type="submit">Log In</button>
        </form>
    </div>

<?php } 
?>
