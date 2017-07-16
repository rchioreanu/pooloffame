<?php
require_once 'votes.class.php';

session_start();
$votes = new Votes();
$voter = $_SESSION['login'];
$content = file_get_contents('users.txt');
echo $content;
if (stripos($content, $_POST['sleeper']) !== FALSE &&
    stripos($content, $_POST['thinker']) !== FALSE &&
    stripos($content, $_POST['solution']) !== FALSE &&
    stripos($content, $_POST['energy']) !== FALSE &&
    stripos($content, $_POST['team']) !== FALSE &&
    stripos($content, $_POST['serious']) !== FALSE &&
    stripos($content, $_POST['beautiful']) !== FALSE &&
    stripos($content, $_POST['coffee']) !== FALSE &&
    stripos($content, $_POST['player']) !== FALSE &&
    stripos($content, $_POST['hard']) !== FALSE &&
    stripos($content, $_POST['active']) !== FALSE)
{
    $votes->setVote($voter, $_POST['sleeper'], 'sleeper');
    $votes->setVote($voter, $_POST['thinker'], 'thinker');
    $votes->setVote($voter, $_POST['solution'], 'solution');
    $votes->setVote($voter, $_POST['energy'], 'energy');
    $votes->setVote($voter, $_POST['team'], 'team');
    $votes->setVote($voter, $_POST['serious'], 'serious');
    $votes->setVote($voter, $_POST['beautiful'], 'beautiful');
    $votes->setVote($voter, $_POST['coffee'], 'coffee');
    $votes->setVote($voter, $_POST['player'], 'player');
    $votes->setVote($voter, $_POST['hard'], 'hard');
    $votes->setVote($voter, $_POST['active'], 'active');
    header("Location: index.php?status=true");
}
else
    header("Location: index.php?error=true")
?>
