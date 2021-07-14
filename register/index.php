<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="../assets/logo.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/themes/darkly/bootstrap.min.css">
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="styles.css">

  </head>
  <body>
    <div class="row">
      <div class="col-lg-12">
        <div class="site-heading">
          <h1 id="header" data-toggle="tooltip" data-html="true" title="Please go away">Supernova</h1>
        </div>
      </div>
    </div>
    <div class="center">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password-repeat" id="password-repeat" placeholder="Repeat password" required>
        </div>
            <?php
                if(trim($_POST['password']) != trim($_POST['password-repeat'])) {
                    echo '<div class="form-group error-message"><p style="text-align: right; margin-bottom:unset; color:#e87878;">Passwords do not match.</p></div>';
                }
            ?>
        <div class="form-button" style="float: right;">
          <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
