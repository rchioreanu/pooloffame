<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Log in to Admin</title>
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css" />
  <style media="screen">
  .col-centered{
    float: none;
    margin: 0 auto;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="modal-body row">
      <?php if ($_GET['error'] == 'true') { ?>
        <div class="alert alert-danger">
          Your credentials are <strong>wrong</strong>
        </div>
        <?php } ?>
        <div class="col-lg-6 col-centered">
          <h2>Log in to Academy+Plus Pool Settings</h2>
          <form action="validate.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-submit form-control">Log in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>
