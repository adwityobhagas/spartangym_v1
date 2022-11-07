<?php 
ob_start();
session_start();
ob_end_clean();

include_once "../config/config.php";

$username = $_POST['username'];
$password = md5($_POST['password']);


//Query 
$sql = mysqli_query($GLOBALS['koneksi'],"SELECT * FROM member WHERE username='$username' AND password='$password'");

$row = mysqli_fetch_array($sql);
$numrows = mysqli_num_rows($sql);

if (empty($row)) 
{
	header('Location:login.php?loginerror');
}
elseif ($row["status"] == 0) 
{
	header('Location:login.php?unverif');
}
else
{
	$_SESSION['fullname']=$row['fullname'];
	header('Location:member.php');
}
?>