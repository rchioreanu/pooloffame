<?php
session_start();
unset($_SESSION);
unset($_SESSION['role']);
session_destroy();
header("Location: index.php");
?>
