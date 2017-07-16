<?php
require_once 'users.class.php';

session_start();
$users = new Users();
$tmp = $users->login($_POST['Username'], $_POST['Password']);
if (!$tmp)
    header("Location: login.php?login=false");
else
{
    $_SESSION['role'] = 'reporter';
    header("Location: index.php");
}
?>
