<?php
$connection=mysqli_connect("localhost", "root", "", "greenleaf");
if(!$connection){
die("Database Connection Failed".mysql_error($connection));

}
  $dFirstName=$_POST['FirstName'];
  $dLastName=$_POST['LastName'];
   $dCounty=$_POST['County'];
   $dSubject=$_POST['Subject'];
      $dMessage=$_POST['Message'];
   $dContacts=$_POST['Contacts'];
$query="INSERT INTO comments (FirstName,LastName,County,Subject,Message,Contacts) values('$dFirstName', '$dLastName','$dCounty', '$dSubject', '$dMessage', '$dContacts')";
 $result = mysqli_query($connection, $query);
 
 
if ($result) 
	echo "Successful";
else 
	echo "failed".mysqli_error($connection);
	
   
	
	mysqli_close($connection);
?>