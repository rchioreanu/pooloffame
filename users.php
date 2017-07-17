<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href = "profile.css" rel = "stylesheet">
<div class="container">
    <div class="row">
<?php
include 'includes.php';

session_start();
if (!$_SESSION['status'])
    header("Location: login/");
$tmp = file_get_contents('users.txt');
$file = explode(PHP_EOL, $tmp);
foreach ($file as $login) {
    echo '
            <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader" style="background-image: \'\'">
                <a href="https://cdn.intra.42.fr/users/medium_'.$login.'.jpg" download="'.$login.'"><img src="https://cdn.intra.42.fr/users/medium_'.$login.'.jpg" /></a>
                </div>
                <div class="info">
                    <div class="title">
                        '.$login.'
                    </div>

                </div>
            </div>
        </div>
        ';
}
?>
    </div>
</div>
    <a href = "logout.php"><button class = "btn-primary" style = "display: block; margin: 0 auto;">Logout</button></a>
    <a href = "."><button class = "btn-primary" style = "display: block; margin: 0 auto;">Back</button></a>
