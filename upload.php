<?php 
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
} 
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Register Spartan</title>

	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/dcf78cbd5c.js" crossorigin="anonymous"></script>

    <!-- SCRIPT JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>
<body>

	<div class="container-fluid">
		<div class="container">
			<!-- START LOGO -->
			<div class="row justify-content-center">
				<div class="col-md-8 text-center mb-3">
					<a href="index.php"><img src="images/logo-transparent1.png" class="img-fluid"></a>
				</div>
			</div>
			<!-- END LOGO -->

			<!-- START FORM -->
			<div class="row justify-content-center">
				<div class="col-md-8 bg-telorasin p-5">
					<form method="post" action="auth/auth_order.php" enctype="multipart/form-data">
                        <?php if(isset($_GET['succeed'])){?>
					                <div class="mt-3 col-lg-12 text-center">
					                    <div class="alert alert-success" style="color:green;">
					                        <b>Upload successfully</b>
					                    </div>
					                </div>
					    <?php }?>
						<h3 class="display-5 pb-3 pt-5">Upload Bukti Bayar Anda Sekarang!</h3>
						<label>Silahkan Transfer ke rekening berikut</label>
						<div><img class="mr-2" src="images/logo-bca.png" style="width: 70px; height: 60px;"></img>
						<label class="display-5 pb-3">xxxxxxxx a.n Konde Arifin</label></div>
						<!-- START BUKTI PEMBAYARAN -->
						<div class="form-group">
							<label>Bukti Pembayaran :</label>
							<br><input type="file" name="buktibayar" required><br>
                            <input type="hidden" name="order_id" value="<?php echo $order_id?>">
						</div>
						<!-- END BUKTI PEMBAYARAN -->

						<input required type="submit" class="btn btn-primary pl-2" name="buktibayar" value="Confirm"></input>
					</form>	
				</div>
			</div>
			<!-- END FORM -->

			<!-- START FOOTER -->
			<div class="row justify-content-center">
                <div class="col-md-8 bg-gray mb-3">
                    <p class="text-center pt-4 pb-2">COPYRIGHT 2021 | &copy; ADWITYO BHAGASKARA</p>
                </div>
            </div>
            <!-- END FOOTER -->
		</div>
	</div>

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>