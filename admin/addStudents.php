<?php
require_once 'db.class.php';
session_start();
if (!$_SESSION['login']) {
  header('location: index.php');
} elseif (!empty($_POST['students'])) {
  $students = explode("\n", $_POST['students']);
  $admin = new Admin();
  $admin->addStudents($students);
  header('location: index.php?success=true');
}
?>
