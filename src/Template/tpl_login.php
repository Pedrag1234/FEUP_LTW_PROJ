<?php
function draw_login() {?>
    <div id ="LoginForm">
        <form action="action_login.php" method="post">
            <label> Username
                <input type="text" name="Username">
            </label>
            <label> Password
                <input type="text" name="Password">
            <button type="submit">Log In</button>
        </form>
    </div>

<?php } 
?>
