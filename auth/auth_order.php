<?php 
include_once '../config/config.php';
	if (isset($_POST['order'])) 
	{
		// Filter fullname,phone number, dan address untuk menghindari serangan XSS
		$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
		$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		$bcaa =$_POST['bcaa'];
		$whey =$_POST['whey'];
		$amino =$_POST['amino'];
		$pw =$_POST['pw'];
		$status=$_POST['status'];
		$order_id = $_POST['order_id'];

		$query= "insert into product_order (order_id,name,phone,address,quantity_bcaa,quantity_wp,quantity_amino,quantity_pw,status,date) values ('$order_id','$fullname','$phone','$address','$bcaa','$whey','$amino','$pw',0,now())";

		$result= mysqli_query($GLOBALS['koneksi'],$query);
		if ($result==1) {
			header("Location: ../upload.php?order_id=$order_id");
		}
	}


	if (isset($_POST['buktibayar'])) 
	{
		// Filter fullname,phone number, dan address untuk menghindari serangan XSS
		$orderid = $_POST['order_id'];
		$bukti_bayar = $_FILES['buktibayar']['name'];
		$image_tmp= $_FILES['buktibayar']['tmp_name'];

		move_uploaded_file($image_tmp, "payment_order/$bukti_bayar");
		$query= "update product_order set payment = '$bukti_bayar' where order_id = '$orderid'";

		$result= mysqli_query($GLOBALS['koneksi'],$query);
		if ($result==1) {
			header("Location: ../upload.php?succeed");
		}
	}
?>