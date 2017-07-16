<?php
include '../includes.php';
require_once '../votes.class.php';
require_once 'users.class.php';

session_start();
if ($_SESSION['role'] != 'reporter')
    header("Location: login.php");
$users = new Users();
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href = "profile.css" rel = "stylesheet">
<div class="container">
    <div class="row">
<?php
$users->getRanking('sleeper');
$users->getRanking('thinker');
$users->getRanking('solution');
$users->getRanking('energy');
$users->getRanking('team');
$users->getRanking('serious');
$users->getRanking('beautiful');
$users->getRanking('coffee');
$users->getRanking('player');
$users->getRanking('hard');
$users->getRanking('active');
?>
    </div>
</div>
    <a href = "logout.php"><button class = "btn-primary" style = "display: block; margin: 0 auto;">Logout</button></a>
