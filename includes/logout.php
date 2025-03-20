<?php
/*
    File ini ada di
    /includes/logout.php
*/
session_start();
session_unset();
session_destroy();
header("Location: ../pages/login.php?success=logged_out");
exit();
?>
