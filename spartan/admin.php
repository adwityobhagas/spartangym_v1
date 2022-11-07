<?php 
include_once "../config/config.php";
ob_start();
session_start();
ob_end_clean();
if(!isset($_SESSION['fullname']))
{
    header('location:index.php');
}


if(isset($_GET["verifyId"])) {
    $id= $_GET["verifyId"];
    $sql = "UPDATE member set status=1 where id = '$id'";
    $query = mysqli_query($GLOBALS['koneksi'],$sql);
}elseif (isset($_GET["deleteId"])) {
    $id= $_GET["deleteId"];
    $sql = "DELETE FROM member WHERE id ='$id'";
    $query = mysqli_query($GLOBALS['koneksi'],$sql);
}

if(isset($_GET["verifyOrder"])) {
    $id= $_GET["verifyOrder"];
    $sql = "UPDATE product_order set status=1 where id = '$id'";
    $query = mysqli_query($GLOBALS['koneksi'],$sql);
}elseif (isset($_GET["proceedOrder"])) {
    $id= $_GET["proceedOrder"];
    $sql = "UPDATE product_order set status=2 WHERE id ='$id'";
    $query = mysqli_query($GLOBALS['koneksi'],$sql);
}elseif (isset($_GET["deleteOrder"])) {
    $id= $_GET["deleteOrder"];
    $sql = "DELETE FROM product_order WHERE id ='$id'";
    $query = mysqli_query($GLOBALS['koneksi'],$sql);
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

    <!-- LIGHTBOX JQUERY -->
    <link rel="stylesheet" type="text/css" href="../css/lightbox.min.css">

    <title>SPARTAN GYM</title>
  </head>
  <body>

    <!-- Start Sidebar -->
	<nav class="navbar navbar-expand-md navbar-light bg-telorasin menu">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">
	    <span class="menu-collapsed">ADMIN AREA</span>
	  </a>

	  <div class="d-flex justify-content-center w-100">
	  	<img src="../images/logo-member.png" class="img-fluid">
	  </div>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item dropdown d-sm-block d-md-none">
	        <a class="nav-link" href="#dashboard" id="smallerscreenmenu" data-toggle="" aria-haspopup="true" aria-expanded="false">
	          Tabel Member
	        </a>
	  
	        <a class="nav-link" href="logout.php" id="smallerscreenmenu" data-toggle="" aria-haspopup="true" aria-expanded="false">
	          Logout
	        </a>
	      </li> 
	    </ul>
	  </div>
	</nav>
	<!-- END SIDEBAR -->

    <div class="row mr-0" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <!-- START TABLE MEMBER -->
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Tabel Member</span>
                    </div>
                </a>
                <!-- END TABLE MEMBER -->

                <!-- START TABLE ORDER -->
                <a href="#dashboard1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-money-bill mr-3"></span>
                        <span class="menu-collapsed">Tabel Order</span>
                    </div>
                </a>
                <!-- END TABLE ORDER -->

                <!-- START LOGOUT -->
                <a href="logout.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fas fa-sign-out-alt mr-3"></span>
                        <span class="menu-collapsed">Logout</span>
                    </div>
                </a>
                <!-- END LOGOUT -->
            </ul>
        </div> 
    <!-- End Sidebar -->

    <!-- START MAIN -->  
        <div class="col mt-5">
        	<div class="container">
            <!-- START TABLE USER -->
                <?php 
                // MYSQL QUERY
                $sql=mysqli_query($GLOBALS['koneksi'],"SELECT * FROM member WHERE status=0 OR status =1");
                $row=mysqli_fetch_array($sql);
                ?>
                <?php 
                // MYSQL QUERY
                $sql1=mysqli_query($GLOBALS['koneksi'],"SELECT * FROM admin");
                $row1=mysqli_fetch_array($sql1);
                ?>
                <div class="row justify-content-center mb-2">
                    <h1>Hello, <?php echo $row1['fullname']; ?></h1>
                </div>
                <div class="row justify-content-center mb-5 mt-5">
                    <div class="col-md-12 col-sm-12" id="dashboard">
                        <h2 class="text-center">Tabel Member</h2>
                        <table class="table table-hover text-center">
                            <thead style="font-size: 0.8em;">
                                <tr>
                                    <th>KTP</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Register Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php do{ ?>
                                    <tr>
                                        <td>
                                            <a class="example-image-link" data-lightbox="example-1" href="../auth/ktp/<?php echo $row['ktp'];?>">
                                            <img class="example-image" src="../auth/ktp/<?php echo $row['ktp'];?>" style="width: 60px; height: 60px;">
                                            </a>
                                        </td>
                                        <td>
                                            <a class="example-image-link" data-lightbox="example-2" href="../auth/payment_member/<?php echo $row['image'];?>">
                                            <img class="example-image" src="../auth/payment_member/<?php echo $row['image'];?>" style="width: 60px; height: 60px;">
                                            </a>
                                        </td>    
                                        <td class="align-middle"><?php echo $row['username'] ?></td>
                                        <td class="align-middle"><?php echo $row['fullname'] ?></td>
                                        <td class="align-middle"><?php echo $row['date']?></td>
                                        <td class="align-middle"><?php echo $row['status'] == 1 ? "Aktif" : "Belum Aktif" ?></td>
                                        <td class="align-middle">
                                            <a href="admin.php?verifyId=<?=$row['id'] ?>" class="btn btn-md btn-primary">
                                                <i class="fas fa-check">&nbsp;Accept</i>
                                            </a> 
                                            &nbsp;
                                            <a href="admin.php?deleteId=<?= $row['id']?>" class="btn btn-md btn-danger">
                                                <i class="fas fa-trash">&nbsp;Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }while($row=mysqli_fetch_array($sql))?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="export_member" class="btn btn-md btn-secondary pl-5 pr-5">Report</a>
                                        </td>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
                <!-- END TABLE USER -->

                <!-- START TABLE ORDER -->
                <?php 
                // MYSQL QUERY
                $sql=mysqli_query($GLOBALS['koneksi'],"SELECT * FROM product_order WHERE status=0 OR status =1 OR status=2");
                $row=mysqli_fetch_array($sql);
                ?>
                <?php 
                // MYSQL QUERY
                $sql1=mysqli_query($GLOBALS['koneksi'],"SELECT * FROM admin");
                $row1=mysqli_fetch_array($sql1);
                ?>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12" id="dashboard1">
                        <h2 class="text-center">Tabel Order</h2>
                        <table class="table table-hover text-center">
                            <thead style="font-size: 0.8em;">
                                <tr>
                                    <th>Bukti Pembayaran</th>
                                    <th>Fullname</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>BCAA</th>
                                    <th>WHEY PROTEIN</th>
                                    <th>AMINO</th>
                                    <th>Preworkout</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php do{ ?>
                                    <tr>
                                        <td class="align-middle">
                                            <a class="example-image-link" data-lightbox="example-3" href="../auth/payment_order/<?php echo $row['payment'];?>">
                                            <img class="example-image" src="../auth/payment_order/<?php echo $row['payment'];?>" style="width: 60px; height: 60px;">
                                            </a>
                                        </td>
                                        <td class="align-middle"><?php echo $row['name']?></td>
                                        <td class="align-middle"><?php echo $row['phone']?></td>    
                                        <td class="align-middle"><?php echo $row['address']?></td>
                                        <td class="align-middle"><?php echo $row['quantity_bcaa']?></td>
                                        <td class="align-middle"><?php echo $row['quantity_wp']?></td>
                                        <td class="align-middle"><?php echo $row['quantity_amino']?></td>
                                        <td class="align-middle"><?php echo $row['quantity_pw']?></td>
                                        <td class="align-middle"><?php echo $row['date']?></td>
                                        <td class="align-middle"><?php echo $row['status'] == 1 ? "Selesai" : (($row['status'] == 2 ? "Dalam Proses" : "Belum Proses")) ?></td>
                                        <td class="align-middle">
                                            <a href="admin.php?verifyOrder=<?=$row['id'] ?>" class="btn btn-md btn-primary">
                                                <i class="fas fa-check pl-1 pr-1">&nbsp;Accept&nbsp;</i>
                                            </a> 
                                            
                                            <a href="admin.php?proceedOrder=<?=$row['id'] ?>" class="btn btn-md btn-success mt-2 mb-2">
                                                <i class="fas fa-cogs pr-1">&nbsp;Process</i>
                                            </a>

                                            <a href="admin.php?deleteOrder=<?= $row['id']?>" class="btn btn-md btn-danger">
                                                <i class="fas fa-trash pl-2 pr-2">&nbsp;Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }while($row=mysqli_fetch_array($sql))?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="export_order.php" class="btn btn-md btn-secondary pl-5 pr-5">Report</a>
                                        </td>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
                <!-- END TABLE ORDER -->
            </div>
        </div>
       <!-- END MAIN -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin aktifkan Username: <b id="usernamedata">User</b> ini?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button id="confirm_data" type="button" class="btn btn-primary">Iya</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    
    <!-- LIGHTBOX JQUERY -->
    <script src="../js/lightbox-plus-jquery.min.js"></script>    


  </body>
</html>