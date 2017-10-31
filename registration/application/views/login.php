<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link  rel="stylesheet" href= "<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  </head>
  <body>
    <div class="col-lg-4 col-lg-offset-4">
    <h1>Login Page</h1>
    <p>Please Enter Correct Credentials to Login</p>

    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <?php if (isset($_SESSION['success'])){ ?>
      <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php  
    } ?>

    <form action="" method="POST">

      <div class="form-group">
        <label for="email" class="label-default">Email:</label>
        <input class="form-control" name="email" id="email" type="email">
      </div>
      <div class="form-group">
        <label for="pass" class="label-default">Password:</label>
        <input class="form-control" name="pass" id="pass" type="password">
      </div>
      <div>
        <button class="btn btn-primary" name="login">LogIn</button>
        <a href = "<?php echo base_url();?>index.php/auth/register">Register</a>
      </div>  

    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>