<?php
require_once 'db.class.php';

session_start();

$admin = new Admin();
if ($_SESSION['login'] === TRUE) {
  header("location: index.php");
} elseif ($admin->loginAdmin($_POST['username'], $_POST['password'])) {
  $_SESSION['login'] = true;
  header("location: index.php");
} else {
  header("location: login.php?error=true");
}
?>
