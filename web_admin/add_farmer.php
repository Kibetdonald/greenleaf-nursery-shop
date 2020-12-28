<html>
<head>
	<title>Add Data</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$farmer_id = mysqli_real_escape_string($mysqli, $_POST['farmer_id']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$Email_Id = mysqli_real_escape_string($mysqli, $_POST['Email_Id']);
	
	$password=md5($_POST['password']);
		
	// checking empty fields
	if(empty($farmer_id) || empty($Email_Id) || empty($password)) {
				
		if(empty($farmer_id)) {
			echo "<font color='red'>farmer_id field is empty.</font><br/>";
		}
		
		if(empty($Email_Id)) {
			echo "<font color='red'>Email_Id field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO farmer (farmer_id,username,phone,Email_Id,password) VALUES('$farmer_id','$username','$phone','$Email_Id','$password')");
		
		//display success message


		echo '<script>
		swal("Farmer Added!");
  </script>';
		   
  echo "<script> window.open('manage_users.php?', '_self')   </script>"; 
		
	
		
	}
}
?>
</body>
</html>
