<?php
    include('../Template/common/header.php');
    include('../Template/common/footer.php');
    include('../Template/tpl_list_user_reservations.php');

    draw_header_profile();

    list_user_reservations();

    draw_footer();

?>