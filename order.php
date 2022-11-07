<?php 
function randomString($length)
{
	$str = "";
	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
	$max = strlen($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}   
$ranum = randomString(5);  
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Order Produk</title>

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

			<!-- START ORDER FORM -->
			<div class="row justify-content-center">
				<div class="col-md-8 bg-telorasin p-5">
					<form method="post" action="auth/auth_order.php" enctype="multipart/form-data">
						<?php if(isset($_GET['succeed'])){?>
					                <div class="mt-3 col-lg-12 text-center">
					                    <div class="alert alert-success" style="color:green;">
					                        <b>Order successfully created</b>
					                    </div>
					                </div>
					    <?php }?>
						<h3 class="display-5 pb-3 pt-2">Order Produk</h3>
						<!-- START FULLNAME -->
						 <div class="form-group">
						   <label>Fullname :</label>
						   <input required autocomplete="off" maxlength="26" type="text" class="form-control" name="fullname" placeholder="Full name must be filled">
						 </div>
						<!-- END FULLNAME  -->

						<!-- START PHONE NUMBER -->
						 <div class="form-group">
						   <label>Phone Number :</label>
						   <input required autocomplete="off" maxlength="13" pattern="[0-9]{11,13}" type="text" class="form-control" name="phone" placeholder="Filled with active phone number">
						 </div>
						<!-- END PHONE NUMBER  -->

						<!-- START ADDRESS -->
						<div class="form-group">
						    <label>Address :</label>
						    <input required autocomplete="off" maxlength="255" type="text" class="form-control" name="address" placeholder="Filled with valid address">
						</div>
						<!-- END ADDRESS -->

						<!-- START PRODUCT QUANTITY -->
						<div class="form-group">
						     BCAA 5000 Harga: <input type="text" name="" disabled value="Rp. 25.000" class="align-left btn font-weight-bold disabled" id="price_bcaa" style="text-align: left !important; padding-left: 0 !important;"><br> Quantity :
							 <!-- <input type="number" class="form-control prc"> -->
						    <input type="text" name="bcaa" class="form-control d-inline bcaa" id="quantity_bcaa" style="width: 200px; height: 35px;">
						    <label id="subtotal_bcaa"></label>
						</div>

						<div class="form-group">
						    100% Whey Protein: <input type="text" name="" disabled value="Rp. 250.000" class="align-left btn font-weight-bold disabled" id="price_whey" style="text-align: left !important; padding-left: 0 !important;"><br> Quantity :
							 <!-- <input type="number" class="form-control prc"> -->
						    <input type="text" name="whey" class="form-control d-inline bcaa" id="quantity_whey" style="width: 200px; height: 35px;">
						    <label id="subtotal_whey"></label>
						</div>

						<div class="form-group">
						     MUTANT AMINO: <input type="text" name="" disabled value="Rp. 100.000" class="align-left btn font-weight-bold disabled" id="price_amino" style="text-align: left !important; padding-left: 0 !important;"><br> Quantity :
							 <!-- <input type="number" class="form-control prc"> -->
						    <input type="text" name="amino" class="form-control d-inline bcaa" id="quantity_amino" style="width: 200px; height: 35px;">
						    <label id="subtotal_amino"></label>
						</div>

						<div class="form-group">
						     PRE-WORKOUT: <input type="text" name="" disabled value="Rp. 150.000" class="align-left btn font-weight-bold disabled" id="price_pw" style="text-align: left !important; padding-left: 0 !important;"><br> Quantity :
							 <!-- <input type="number" class="form-control prc"> -->
						    <input type="text" name="pw" class="form-control d-inline bcaa" id="quantity_pw" style="width: 200px; height: 35px;">
						    <label id="subtotal_pw"></label>
						</div>
						
						<!-- START GRAND TOTAL -->
						<div class="form-group mb-2">
						Grand Total : <label id="grandtotal" for=""></label>
						</div>
						<!-- END GRAND TOTAL -->

						<div>
							<input type="hidden" name="order_id" value="<?php echo $ranum?>">
						</div>
						
						<a class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal">
							Confirm
						</a>
						<!-- MODAL UPLOAD BUKTI BAYAR -->
						<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-body">
									<div class="text-center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h5 id="exampleModalLabel">Konfirmasi Order</h5>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<input required type="submit" class="btn btn-primary " name="order" value="Order"></input> 
									</div>
								</div>
								</div>
							</div>
						</div>
						<!-- End MODAL -->		
					</form>	
				</div>
			</div>
			<!-- END ORDER FORM -->

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
	<script src="js/jquery.min.js"></script>
	<!-- Jquery untuk melakukan kalkulasi Grand Total -->
	<script>
		// Jquery For Subtotal
		$(function(){
			$('#quantity_bcaa , #price_bcaa').on('change', function(){
				totalBcaa();
			});
			$('#quantity_whey , #price_whey').on('change', function(){
				totalWhey();
			});
			$('#quantity_amino , #price_amino').on('change', function(){
				totalAmino();
			});
			$('#quantity_pw , #price_pw').on('change', function(){
				totalPw();
			});
		});

		function OrderItem(quantity,price){
			this.quantity = quantity;
			this.price = price;
			this.getSubtotal=function(){
				return this.quantity * this.price
			};
		}
		let grandtotal=0;
		var orderItems = {
			"bcaa": new OrderItem (0,25000),
			"whey": new OrderItem (0,250000),
			"amino": new OrderItem (0,100000),
			"pw": new OrderItem(0,150000),
		}

		function totalBcaa(){
			let quantity = $("#quantity_bcaa").val();
			orderItems.bcaa.quantity=quantity;
			const format = orderItems.bcaa.getSubtotal().toString().split('').reverse().join('');
			const convert = format.match(/\d{1,3}/g);
			grandTotal();
			document.getElementById('subtotal_bcaa').innerHTML = "Subtotal = Rp. "+convert.join('.').split('').reverse().join('');
		}

		function totalWhey(){
			this.quantity = $("#quantity_whey").val();
			orderItems.whey.quantity=quantity;
			const format = orderItems.whey.getSubtotal().toString().split('').reverse().join('');
			const convert = format.match(/\d{1,3}/g);
			grandTotal();
			document.getElementById('subtotal_whey').innerHTML = "Subtotal = Rp. "+convert.join('.').split('').reverse().join('');
		}

		function totalAmino(){
			this.quantity = $("#quantity_amino").val();
			orderItems.amino.quantity=quantity;
			const format = orderItems.amino.getSubtotal().toString().split('').reverse().join('');
			const convert = format.match(/\d{1,3}/g);
			grandTotal();
			document.getElementById('subtotal_amino').innerHTML = "Subtotal = Rp. "+convert.join('.').split('').reverse().join('');
		}

		function totalPw(){
			this.quantity = $("#quantity_pw").val();
			orderItems.pw.quantity=quantity;
			const format = orderItems.pw.getSubtotal().toString().split('').reverse().join('');
			const convert = format.match(/\d{1,3}/g);
			grandTotal();
			document.getElementById('subtotal_pw').innerHTML = "Subtotal = Rp. "+convert.join('.').split('').reverse().join('');
		}

		function grandTotal(){
			for (const orderItem in orderItems){
				grandtotal+=orderItems[orderItem].getSubtotal();
			}
			const format = grandtotal.toString().split('').reverse().join('');
			const convert = format.match(/\d{1,3}/g);
			document.getElementById('grandtotal').innerHTML = "Rp "+convert.join('.').split('').reverse().join('');
		}
	</script>
</body>
</html>