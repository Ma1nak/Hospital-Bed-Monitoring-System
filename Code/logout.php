<?php
session_start();
unset($_SESSION["USERID"]);
unset($_SESSION["PASSWORD"]);
session_destroy();
header("Location:login_admin.php");
?>