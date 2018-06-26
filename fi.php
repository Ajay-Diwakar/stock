<?php
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location: index.php');
}
if(!isset($_POST['date2']) || !isset($_POST['date1']))
{
	header('Location: dateselect.php');
}
$x=$_POST['date1'];
$y=$_POST['date2'];

$con=mysqli_connect("localhost","root","","stock");
$smt=$con->prepare("select * from dispatch where date>=? and date<=?");
$smt->bind_param('ss',$x,$y);
$smt->execute();
$res=$smt->get_result();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Datewise Dispatch Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
background-color:LemonChiffon;
}
</style>
</head>
<body>
<?php 
include 'nav.php';
?>
<div class="container">


  <center><h2>Datewise Dispatch Report</h2></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item</th>
        <th>Category</th>
        <th>Place</th>
		<th>Date</th>
      </tr>
    </thead>
    <tbody>
<?php
while($row=$res->fetch_assoc())
{
	echo "<tr>";
	echo "<td>" .$row['item'] ."</td>";
	echo "<td>" .$row['quantity'] ."</td>";
	echo "<td>" .$row['place'] ."</td>";
	$dt=explode(" ",$row['date']);
	$d=$dt[0];	
	echo "<td>" .$d ."</td>";
	echo "</tr>";
}
?>
    </tbody>
  </table>
</div>
</body>
</html>