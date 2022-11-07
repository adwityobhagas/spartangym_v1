<?php 
include_once "../config/config.php";
ob_start();
session_start();
ob_end_clean();
if(!isset($_SESSION['fullname']))
{
    header('location:login.php');
}
?>
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

    <!-- CALENDAR CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.css">

    <title>SPARTAN GYM</title>
  </head>
  <body>

    <!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-telorasin menu">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">
	    <span class="menu-collapsed">MEMBER AREA</span>
	  </a>

	  <div class="d-flex justify-content-center w-100">
	  	<img src="../images/logo-member.png" class="img-fluid">
	  </div>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item dropdown d-sm-block d-md-none">
	        <a class="nav-link" href="#" id="smallerscreenmenu" data-toggle="" aria-haspopup="true" aria-expanded="false">
	          Membership Period
	        </a>
	        <a class="nav-link" href="logout.php" id="smallerscreenmenu" data-toggle="" aria-haspopup="true" aria-expanded="false">
	          Logout
	        </a>
	      </li> 
	    </ul>
	  </div>
	</nav>
	<!-- END SIDEBAR -->

<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-users mr-3"></span>
                    <span class="menu-collapsed">Membership Period</span>
                </div>
            </a>

            <a href="logout.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-sign-out-alt mr-3"></span>
                    <span class="menu-collapsed">Logout</span>
                </div>
            </a>            
        </ul>
    </div> 
    <!-- End Sidebar -->

    <!-- MAIN -->  
    <div class="col">
	    <!-- START MASA AKTIF MEMBER-->
	    <?php 
        // MYSQL QUERY
        $sql=mysqli_query($GLOBALS['koneksi'],"SELECT *,DATE_ADD(date, INTERVAL 30 DAY) AS end_date FROM member WHERE status=1");
        $row=mysqli_fetch_array($sql);
        ?>
	    <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center pb-3">
                    <h3>Hello Member, <?php echo $_SESSION["fullname"]; ?></h3>
                </div>
            </div>

	    	<div class="row justify-content-center">
	    		<div class="col-md-8" id="submenu1">
	    			<h4>Member Active Period</h4>
	    			<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>Start Date</th>
					      <th>End Date</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td><?php echo $row['date'] ?></td>
					      <td><?php echo $row['end_date'] ?></td>
					    </tr>
					  </tbody>
					</table>
	    		</div>
	    	</div>
	    </div>
	    <!-- END MASA AKTIF MEMBER-->
    </div>
   <!-- MAIN -->
</div>
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
<?php 
session_write_close();
?>