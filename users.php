<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href = "profile.css" rel = "stylesheet">
<div class="container">
  <div class="row">
    <?php
    include 'includes.php';

    session_start();
    if (!$_SESSION['status'])
    header("Location: login/");
    require_once 'votes.class.php';
    $votes = new Votes();
    $votes->getPhotos();
    ?>
  </div>
</div>
<a href = "logout.php"><button class = "btn-primary" style = "display: block; margin: 0 auto;">Logout</button></a>
<a href = "."><button class = "btn-primary" style = "display: block; margin: 0 auto;">Back</button></a>
