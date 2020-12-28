<?php
$connection=mysqli_connect("localhost", "root", "", "greenleaf");
if(!$connection){
die("Database Connection Failed".mysql_error($connection));

}
  $Email_id=$_POST['Email_id'];

$query="INSERT INTO subscription (Email_id) values( '$Email_id')";
 $result = mysqli_query($connection, $query);
 
 
if ($result) 
   echo "Successful";
   

else 
	echo "failed".mysqli_error($connection);
	
   
	
	mysqli_close($connection);
?>