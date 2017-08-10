<?php
session_start();
if (!$_SESSION['login'])
header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css" />
</head>
<body>
  <div class="container">
    <div class="modal-body row">
      <?php if ($_GET['error']) { ?>
        <div class="alert alert-danger">
          Please check <strong>again</strong> and then submit the form
        </div>
      <?php } elseif ($_GET['success']) { ?>
        <div class="alert alert-success">
          <strong>Succes</strong>
        </div>
      <?php } ?>
      <h1>Edit the Academy+Plus Pool settings</h1>
      <div class="col-md-4">
        <h4>Add new viewer</h4>
        <form action="addViewer.php" method="post">
          <div class="form-group">
            <label for="addUsername">Set Username: </label>
            <input type="text" name="username" id="addUsername" class="form-control">
          </div>
          <div class="form-group">
            <label for="addPassword">Set Password: </label>
            <input type="password" name="password" id="addPassword" class="form-control">
          </div>
          <div class="form-group">
            <label for="confirm">Confirm Password: </label>
            <input type="password" name="confirm" id="confirm" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-submit form-control" type="submit" name="add">Add user</button>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <h4>Import students</h4>
        <form action="addStudents.php" method="post">
          <div class="form-group">
            <label for="addUsername">Add students(one per line): </label>
            <textarea name="students" rows="8" cols="80" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-submit form-control" type="submit" name="add">Add user</button>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <h4>Reset Pool</h4>
        <form action="reset.php" method="post">
          <div class="form-group">
            <label for="superSecret">Enter the super secret password: </label>
            <input type="password" name="secret" id="superSecret" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-submit form-control" type="submit" name="add">Destroy everything!!!</button>
          </div>
        </form>
      </div>
      <a href="logout.php"><button class="btn btn-default btn-block btn-danger" type="button" name="button">Logout</button></a>
    </div>
  </div>
</body>
</html>
