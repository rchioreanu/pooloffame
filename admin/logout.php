<?php
session_start();
unset($_SESSION['login']);
session_unset();
session_destroy();
header('location: index.php');
?>
