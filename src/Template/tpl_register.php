<?php function draw_register_form() {?>
    <div id ="RegisterForm">
        <form action="../actions/action_register.php" method="post">
            <label> Username
                <input type="text" name="Username">
            </label>
            <label> Password
                <input type="text" name="Password">
            </label>
            <label> Confirm Password
                <input type="text" name="ConfPassword">
            </label>
            <label> Name
                <input type="text" name="Name">
            </label>
            <label> Date of Birth
                <input type="date" name="BirthDay">
            </label>
            <button type="submit">Register</button>
        </form>
    </div>

<?php } ?>
