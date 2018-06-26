<?php
session_start();
if(!isset($_SESSION['uname']))
{echo "<script>window.location.href='index.php';</script>";}
if(!isset($_POST['item1']))
{
echo "<script>window.location.href='purchase.php';</script>";
}

function ins($item1,$category1,$quantity1,$amountkg1,$total1){
	$con=mysqli_connect("localhost","root","","stock");
	$smt=$con->prepare("insert into purchase(item,category,quantity,amountkg,amount) values(?,?,?,?,?)");
	$smt->bind_param('sssss',$item1,$category1,$quantity1,$amountkg1,$total1);
	$smt->execute();
	$smt=$con->prepare("select * from current where item=?");
	$smt->bind_param('s',$item1);
	$smt->execute();
	$res=$smt->get_result();
	if($row=$res->fetch_assoc())
	{
		$x=$row['quantity'];
		$x=$x+$quantity1;
		$smt=$con->prepare("update current set quantity=? where item=?");
		$smt->bind_param('ss',$x,$item1);
		$smt->execute();
	}
	else{
		$smt=$con->prepare("insert into current(item,category,quantity) values(?,?,?)");
	   $smt->bind_param('sss',$item1,$category1,$quantity1);
	   $smt->execute();
	}
	$con->close();
}
if(isset($_POST['item1']) && isset($_POST['category1']) && isset($_POST['quantity1']) && isset($_POST['amountkg1']) && isset($_POST['total1']))
{	
	$item1=$_POST['item1'];
	$category1=$_POST['category1'];
	$quantity1=$_POST['quantity1'];
	$amountkg1=$_POST['amountkg1'];
	$total1=$_POST['total1'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item2']) && isset($_POST['category2']) && isset($_POST['quantity2']) && isset($_POST['amountkg2']) && isset($_POST['total2']))
{	
	$item1=$_POST['item2'];
	$category1=$_POST['category2'];
	$quantity1=$_POST['quantity2'];
	$amountkg1=$_POST['amountkg2'];
	$total1=$_POST['total2'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item3']) && isset($_POST['category3']) && isset($_POST['quantity3']) && isset($_POST['amountkg3']) && isset($_POST['total3']))
{	
	$item1=$_POST['item3'];
	$category1=$_POST['category3'];
	$quantity1=$_POST['quantity3'];
	$amountkg1=$_POST['amountkg3'];
	$total1=$_POST['total3'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item4']) && isset($_POST['category4']) && isset($_POST['quantity4']) && isset($_POST['amountkg4']) && isset($_POST['total4']))
{	
	$item1=$_POST['item4'];
	$category1=$_POST['category4'];
	$quantity1=$_POST['quantity4'];
	$amountkg1=$_POST['amountkg4'];
	$total1=$_POST['total4'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item5']) && isset($_POST['category5']) && isset($_POST['quantity5']) && isset($_POST['amountkg5']) && isset($_POST['total5']))
{	
	$item1=$_POST['item5'];
	$category1=$_POST['category5'];
	$quantity1=$_POST['quantity5'];
	$amountkg1=$_POST['amountkg5'];
	$total1=$_POST['total5'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item6']) && isset($_POST['category6']) && isset($_POST['quantity6']) && isset($_POST['amountkg6']) && isset($_POST['total6']))
{	
	$item1=$_POST['item6'];
	$category1=$_POST['category6'];
	$quantity1=$_POST['quantity6'];
	$amountkg1=$_POST['amountkg6'];
	$total1=$_POST['total6'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item7']) && isset($_POST['category7']) && isset($_POST['quantity7']) && isset($_POST['amountkg7']) && isset($_POST['total7']))
{	
	$item1=$_POST['item7'];
	$category1=$_POST['category7'];
	$quantity1=$_POST['quantity7'];
	$amountkg1=$_POST['amountkg7'];
	$total1=$_POST['total7'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item8']) && isset($_POST['category8']) && isset($_POST['quantity8']) && isset($_POST['amountkg8']) && isset($_POST['total8']))
{	
	$item1=$_POST['item8'];
	$category1=$_POST['category8'];
	$quantity1=$_POST['quantity8'];
	$amountkg1=$_POST['amountkg8'];
	$total1=$_POST['total8'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item9']) && isset($_POST['category9']) && isset($_POST['quantity9']) && isset($_POST['amountkg9']) && isset($_POST['total9']))
{	
	$item1=$_POST['item9'];
	$category1=$_POST['category9'];
	$quantity1=$_POST['quantity9'];
	$amountkg1=$_POST['amountkg9'];
	$total1=$_POST['total9'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item10']) && isset($_POST['category10']) && isset($_POST['quantity10']) && isset($_POST['amountkg10']) && isset($_POST['total10']))
{	
	$item1=$_POST['item10'];
	$category1=$_POST['category10'];
	$quantity1=$_POST['quantity10'];
	$amountkg1=$_POST['amountkg10'];
	$total1=$_POST['total10'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item11']) && isset($_POST['category11']) && isset($_POST['quantity11']) && isset($_POST['amountkg11']) && isset($_POST['total1']))
{	
	$item1=$_POST['item11'];
	$category1=$_POST['category11'];
	$quantity1=$_POST['quantity11'];
	$amountkg1=$_POST['amountkg11'];
	$total1=$_POST['total11'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item12']) && isset($_POST['category12']) && isset($_POST['quantity12']) && isset($_POST['amountkg12']) && isset($_POST['total12']))
{	
	$item1=$_POST['item12'];
	$category1=$_POST['category12'];
	$quantity1=$_POST['quantity12'];
	$amountkg1=$_POST['amountkg12'];
	$total1=$_POST['total12'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item13']) && isset($_POST['category13']) && isset($_POST['quantity13']) && isset($_POST['amountkg13']) && isset($_POST['total13']))
{	
	$item1=$_POST['item13'];
	$category1=$_POST['category13'];
	$quantity1=$_POST['quantity13'];
	$amountkg1=$_POST['amountkg13'];
	$total1=$_POST['total13'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item14']) && isset($_POST['category14']) && isset($_POST['quantity14']) && isset($_POST['amountkg14']) && isset($_POST['total14']))
{	
	$item1=$_POST['item14'];
	$category1=$_POST['category14'];
	$quantity1=$_POST['quantity14'];
	$amountkg1=$_POST['amountkg14'];
	$total1=$_POST['total14'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

if(isset($_POST['item15']) && isset($_POST['category15']) && isset($_POST['quantity15']) && isset($_POST['amountkg15']) && isset($_POST['total15']))
{	
	$item1=$_POST['item15'];
	$category1=$_POST['category15'];
	$quantity1=$_POST['quantity15'];
	$amountkg1=$_POST['amountkg15'];
	$total1=$_POST['total15'];

	ins($item1,$category1,$quantity1,$amountkg1,$total1);
}

echo "<script>window.alert('Data inserted Successfully');window.location.href='purchase.php';</script>";
?>
