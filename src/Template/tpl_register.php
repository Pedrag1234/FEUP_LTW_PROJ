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
                if (isset($_GET['error'])) { 
                    ?><h3><?php
                    echo $_GET['error']; 
                    ?></h3><?php
                }
            ?>
        </div>
        <div id="regLabels">
            Username<br>
            <br>Password<br>
            <br>Confirm Password<br>
            <br>Name<br>
            <br>Date of Birth
        </div>
        <form action="../actions/action_register.php" method="post">
            <label>
                <input type="text" name="Username" maxlength="20"><br><br>
            </label>
            <label>
                <input type="password" name="Password" maxlength="40"><br><br>
            </label>
            <label>
                <input type="password" name="ConfPassword" maxlength="40"><br><br>
            </label>
            <label>
                <input type="text" name="Name" maxlength="40"><br><br>
            </label>
            <label>
                <input type="date" name="BirthDay"><br><br>
            </label>
            <button type="submit">Register</button>
        </form>
        
    </div>

<?php } 
?>
