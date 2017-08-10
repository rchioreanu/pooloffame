<?php
require_once 'db.class.php';
session_start();
if (!$_SESSION['login']) {
  header('location: index.php');
} elseif (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm'])) {
  header('location: index.php?error=true');
} elseif ($_POST['password'] !== $_POST['confirm']) {
  header('location: index.php?error=true');
} else {
  $admin = new Admin();
  $admin->addViewer($_POST['username'], $_POST['password']);
  header('location: index.php?success=true');
}
 ?>
