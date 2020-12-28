<?php


$hostname = "localhost";

$user = "root";

$password = "";

$database = "greenleaf";

$db = mysqli_connect($hostname,$user,$password) or die("Connection Failed........!!!");

mysqli_select_db($db,$database) or die("Database not selected....!!!");


$fn = $_POST['fname'];

$ln = $_POST['lname'];

$gen = $_POST['g'];

$cno = $_POST['contact'];

$eid = $_POST['email'];

$pass =md5( $_POST['c_password']);

$pass2 = md5($_POST['password']);

if($pass === $pass2)
{
	
$query = "INSERT INTO users (firstname, lastname, gender, contact_no, Email_id, password) VALUES('".$fn."', '".$ln."', '".$gen."', '".$cno."', '".$eid."', '".$pass."')";

mysqli_query($db,$query) or die("<h2 style = 'color:red;'> This Email id Already Has been Registered........</h2>");

header("location:checkout.php");

}
else
{


echo "<script>alert('Sorry Your Password Dont Match, Please Try again.')</script>";
        
        echo "<script>window.open('Signup.php','_self')</script>";

}


mysqli_close($db);

?>
