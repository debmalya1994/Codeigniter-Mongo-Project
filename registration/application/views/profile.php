<!doctype html>
<html lang="en">
  <head>
    <title>Profie Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link  rel="stylesheet" href= "<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  </head>
  <body>
    <div class="col-lg-4 col-lg-offset-4">
    <h1>Profile Page</h1>
      <?php if (isset($_SESSION['success'])){ ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
      <?php  
      } ?>

      <p style="font-family:courier;">Hello, Bellow are your details:

      <p><b>FullName:</b> <?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?> </p>
      <p><b>Date of Birth:</b> <?php echo $_SESSION['dob'];?></p>

      <br>
      <a href ="<?php echo base_url();?>index.php/auth/logout">LogOut</a>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>