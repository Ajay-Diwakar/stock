<?php
session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script>window.location.href='index.php';</script>";
}
if(!isset($_POST['category']))
{
	echo "<script>window.location.href='category.php';</script>";
}
$con=mysqli_connect("localhost","root","","stock");
$x=$_POST['category'];
$y="category";
$smt=$con->prepare("select * from admin where value=? and category=? ");
$smt->bind_param('ss',$x,$y);
$smt->execute();
$res=$smt->get_result();
if($row=$res->fetch_assoc())
{
	echo "<script>window.alert('Category Already Exists');</script>";
	echo "<script>window.location.href='category.php';</script>";
}
else{
	$smt=$con->prepare("insert into admin(value,category) values(?,?)");
	$smt->bind_param('ss',$x,$y);
	$smt->execute();
	echo "<script>window.alert('Category Added Successfully');</script>";
	echo "<script>window.location.href='category.php';</script>";
}
?>