<?php
	//establish connection to the database server
	$connect=mysqli_connect("localhost","root","") or die("Could not connect to the database server");
	
	//select the database for use
	mysqli_select_db($connect,"greenleaf") or die("Could not select the database");
	
	//Receive login data and store in variables
	$Email_id=$_POST['Email_id'];
	$password=$_POST['password'];
			
	//Check if username and password are in the table
	$results=mysqli_query($connect,"select * from users where Email_id='$Email_id' and password='$password'");
	
	
	$count = mysqli_num_rows($results);
		if($count ==1){
			session_start();
			$_SESSION['Email_id']=$Email_id;
			header('location:getlogin.php');
		
		}else{
			header('location:Login.php');
		}
	
	//close connection
	mysqli_close($connect);
?>