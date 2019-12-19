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
        <div id="loginLabels">
            Username<br>
            <br>Password<br>
        </div>
        <form action="../actions/action_login.php" method="post">
            <label>
                <input type="text" name="Username" maxlength="20"><br><br>
            </label>
            <label>
                <input type="password" name="Password" maxlength="40"><br><br>
            </label>
            <button type="submit">Log In</button>
        </form>
    </div>

<?php } 
?>
