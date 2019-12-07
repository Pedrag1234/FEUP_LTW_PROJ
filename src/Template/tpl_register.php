<?php 

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

function draw_register_form() {?>
    <div id ="RegisterForm">
        <div id=error>
            <?php 
                if (isset($_GET['RegError'])) { 
                    ?><h3><?php
                    echo $_GET['RegError']; 
                    ?></h3><?php
                }
            ?>
        </div>
        <form action="../actions/action_register.php" method="post">
            <label> Username
                <input type="text" name="Username" maxlength="20">
            </label>
            <label> Password
                <input type="password" name="Password" maxlength="40">
            </label>
            <label> Confirm Password
                <input type="password" name="ConfPassword" maxlength="40">
            </label>
            <label> Name
                <input type="text" name="Name" maxlength="40">
            </label>
            <label> Date of Birth
                <input type="date" name="BirthDay">
            </label>
            <button type="submit">Register</button>
        </form>
    </div>

<?php } 
?>
