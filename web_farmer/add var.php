<html>
<head>
	<title>Add Category</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$variety_id = mysqli_real_escape_string($mysqli, $_POST['variety_id']);
	$variety_title = mysqli_real_escape_string($mysqli, $_POST['variety_title']);
	
		
	// checking empty fields
	if(empty($variety_id) || empty($variety_title) ) {
				
		if(empty($cat_id)) {
			echo "<font color='red'>variety_id field is empty.</font><br/>";
		}
		
		if(empty($cat_title)) {
			echo "<font color='red'>variety_title field is empty.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO variety (variety_id,variety_title) VALUES('$variety_id','$variety_title')");
		
		//display success message
		echo"<script>window.open('cate.php?tn=$r','_self')</script>";
	}
}
?>
</body>
</html>
