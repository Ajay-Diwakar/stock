<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location.href='index.php';</script>";
}
$con=mysqli_connect("localhost","root","","stock");
$x="vendor";
$smt=$con->prepare("select * from admin where category=?");
$smt->bind_param('s',$x);
$smt->execute();
$res=$smt->get_result();
while($row=$res->fetch_assoc())
{
	echo "<p>".$row["value"] ."</p>";
}
?>