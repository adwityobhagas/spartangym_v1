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

			
			<div class="row justify-content-center">
				<div class="col-md-10 bg-telorasin p-5">
                        <h2 class="text-center">Riwayat Pesanan</h2>
                        <div class="text-center pb-3"><label>Silahkan Upload Bukti Bayar pada Menu ini</label></div>
                        <?php if(isset($_GET['succeed'])){?>
                                <div class="text-center">
                                    <div class="alert alert-success" style="color:green;">
                                        <b>Bukti Bayar berhasil diupload</b>
                                    </div>
                                </div>
					    <?php }?>
                        <table class="table table-borderless table-hover text-center">
                            <thead style="font-size: 0.8em;">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Tanggal</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Bukti Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="align-middle">ORDER01</td>
                                <td class="align-middle">08-01-2022</td>
                                <td class="align-middle">Jl. Mawar, Bekasi</td>
                                <td class="align-middle">08123456789</td>
                                <td class="align-middle">Belum Konfirmasi</td>
                                <td class="align-middle">
                                    <a class="btn btn-outline-dark btn-sm">
                                            Upload Bukti Transfer
                                    </a>
                                </td>
                            </tbody>
                        </table>
				</div>
			</div>
			

			<!-- START FOOTER -->
			<div class="row justify-content-center">
                
            </div>
            <!-- END FOOTER -->
		</div>
	</div>

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>