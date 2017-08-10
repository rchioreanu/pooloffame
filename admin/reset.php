<?php
require_once 'db.class.php';
 session_start();
 if (!$_SESSION['login']) {
   header('location: index.php');
 } elseif ($_POST['secret'] !== 'academyplus') {
   header('location: index.php?error=true');
 } else {
   $admin = new Admin();
   $admin->reset();
   header('location: index.php?success=true');
 }
 ?>
