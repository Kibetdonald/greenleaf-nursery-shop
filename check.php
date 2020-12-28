<html>
<head>
<title>Secure Checkout</title>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php
  
session_start();

include 'con_.php';


$odt = date("dmyH:i:s A");

if(isset($_SESSION['Email']))
{

if(!isset($_SESSION['cat']))
{
$_SESSION['cat'] = array();

}

$em = $_SESSION['Email'];

}

if(isset($_POST['submit']))
{

$fn = $_POST['sfname'];

$ln = $_POST['slname'];

$e =  $_POST['semail'];

$add = $_POST['Address'];



$county = $_POST['select2'];

$town = $_POST['select3'];



$contact = $_POST['stel2'];



$m = $_POST['mon'];

$y = $_POST['yer'];

$exd = $m."/".$y;

$cardname = $_POST['cardname'];
$Cardno = $_POST['cardnumber'];

$r = mysql_query("INSERT INTO orders(FirstName, LastName, Email,County, Town,  contactNo,  ExpirationDate, Address,Cardname,Cardnumber) VALUES('".$fn."', '".$ln."', '".$e."', '".$county."', '".$town."', '".$contact."', '".$exd."',  '".$add."' ,  '".$cardname."',  '".$cardnumber."')") or die("Failed to Insert Data ,Something is Wrong... With this Order.... Try again...");

	echo "<h2>Order successfuly placed!</h2>";
	
	
	echo "<a href='myorders.php'>View Your Orders </a>";

mysql_close($db);

}


?>

</body> 
</html>