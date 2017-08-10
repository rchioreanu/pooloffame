<?php
require_once 'votes.class.php';

session_start();
$votes = new Votes();
$voter = $_SESSION['login'];
foreach ($_POST as $key => $elem) {
  if (empty($elem)) {
    header('location: index.php?error=true');
  }
  else {
    $votes->setVote($voter, $elem, $key);
  }
    header('location: index.php?success=true');
}
?>
