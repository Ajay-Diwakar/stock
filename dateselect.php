<?php
session_start();
if(!isset($_SESSION['uname']))
{
echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Reports</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body{
background-color:#CBFFC2;
}
</style>
  
</head>
<body >
<?php 
include 'nav.php';
?>

<div class="container">



<center><h1>Reports</h1></center><hr>

<form action="fi.php" method="post">
<lable for="from">From</lable><br>
<input type="date" class="form-control" name="date1" /><br>
<lable for="to">To</lable><br>
<input type="date" class="form-control" name="date2" /><br>
<br/>
<button type="submit" class="btn btn-warning" value="Get Report">Get Report</button>
</form>
<center><a href="homepage.php" style="color:white">Home</a></center>
</div>
</body>
</html>
