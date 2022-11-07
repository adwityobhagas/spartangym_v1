<?php 
// Mengakses plugin mpdf untuk membuat file pdf
require_once __DIR__ . '/../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

// Menggabung file koneksi database
include '../config/config.php';
$document_name='laporan_order';
ob_start();
?>

<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html, charset=Windows-1252">
    <style type="text/css">
    	*{
    		padding: 0;
    		margin: 0;
    	}
    	div{
    		width: 100%;
    		margin: auto;
    		text-align: center;
    	}
		table,td,th {
			font-size: 17px;
			margin: auto;
			border-collapse: collapse;
			border: 1px solid black;
			padding: 20px;	
		}
		thead {
			font-weight: bold;
			color: black;
		}
		td {
			padding: 10px;
			text-align: center;
		}
    </style>
</head>
	<body>
		<?php       
            // MYSQL QUERY
            $sql=mysqli_query($GLOBALS['koneksi'],"SELECT * FROM product_order WHERE status=0 OR status =1 OR status=2");
            $row=mysqli_fetch_array($sql);
        ?>
		<div>
			<h2>Laporan Order</h2>
			<table>
			  	<thead>
				    <tr>
					   <th>No. Order</th>
					   <th>Fullname</th>
	                   <th>Phone Number</th>
	                   <th>Address</th>
	                   <th>BCAA</th>
	                   <th>WHEY PROTEIN</th>
	                   <th>AMINO</th>
	                   <th>Preworkout</th>
	                   <th>Order Date</th>
	                   <th>Status</th>
					</tr>
			   	</thead>
					<tbody>
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['phone'];?></td>
							<td><?php echo $row['address'];?></td>
							<td><?php echo $row['quantity_bcaa'];?></td>
							<td><?php echo $row['quantity_wp'];?></td>
							<td><?php echo $row['quantity_amino'];?></td>
							<td><?php echo $row['quantity_pw'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><?php echo $row['status']== 1 ? "Selesai" : (($row['status'] == 2 ? "Dalam Proses" : "Belum Proses"))?></td>
						</tr>
					</tbody>
			</table>
		</div>
	</body>
</html>
<?php 
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$document_name.".pdf" ,'D');
$koneksi->close();
?>