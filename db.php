
<?php

$con = mysqli_connect("localhost","root","","greenleaf");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}

?>