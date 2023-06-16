<?php include ('./server.php'); ?>
<?php
session_start();
unset($_SESSION["em"]);
unset($_SESSION["pass"]);
header("Location:login.php");
?>