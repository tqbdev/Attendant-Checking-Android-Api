<?php
$connect = mysqli_connect("localhost","id7533871_hcmusattendance","123456","id7533871_kcpm");


if(isset($_POST['log']))
{
	$log = $_POST['log'];
}
if(isset($_POST['name']))
{
	$name = $_POST['name'];
}

$query = "UPDATE loghistory SET log = CONCAT(log,'$log') WHERE name = '$name'  ";
$data = mysqli_query($connect,$query);


?>
