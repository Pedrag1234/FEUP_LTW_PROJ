<?php
include_once('../Template/common/header.php');
include_once('../Template/common/footer.php');

draw_header_chat();
?>
	<div id ="toWhomForm">
        <form action="../pages/chats.php" method="GET">
            <label> User
                <input type="text" name="Receiver" maxlength="20">
            </label>
            <button type="submit">Confirm</button>
        </form>
    </div>

<?php
draw_footer();

?>