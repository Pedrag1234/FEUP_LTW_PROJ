<?php function draw_register_form() {?>
    <div id ="RegisterForm">
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

<?php } ?>
