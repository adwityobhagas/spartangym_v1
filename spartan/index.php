<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/dcf78cbd5c.js" crossorigin="anonymous"></script>

    <title>Admin Spartan Gym</title>
  </head>
  <body class="text-center custom">
    <!-- START SIGN IN -->
    <form class="form-signin bg-telorasin" method="post" action="ceklogin_admin.php">
        <!-- START LOGO -->
        <a href="../index.php"><img src="../images/logo-transparent1.png" class="img-fluid"></a>
        <h1 class="h3 mb-5 font-weight-normal">Admin Login</h1>
        <!-- END LOGO -->

        <!-- START USERNAME -->
        <label for="username" class="sr-only">Username</label>
        <input required type="text"  class="form-control" placeholder="Username" name="username">
        <!-- END USERNAME -->

        <!-- START PASSWORD -->
        <label for="password" class="sr-only">Password</label>
        <input required type="password" class="form-control mt-3" placeholder="Password" name="password">
        <!-- END PASSWORD -->

        <input type="submit" class="btn btn-primary btn-lg btn-block mt-5" name="login" value="Login">
        
        <?php if(isset($_GET['loginerror'])){?>
                <div class="mt-3 col-lg-12 text-center">
                    <div class="alert alert-danger" style="color:red;">
                        <b>Username dan Password Salah..</b>
                    </div>
                </div>
        <?php } ?>
            
        <p class="mt-5 mb-3 text-muted">COPYRIGHT 2021 | &copy; ADWITYO BHAGASKARA</p>
    </form>
    <!-- END SIGN IN -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <!-- <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>