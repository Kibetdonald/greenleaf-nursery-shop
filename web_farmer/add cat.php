<html>
<head>
	<title>Add Category</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$cat_id = mysqli_real_escape_string($mysqli, $_POST['cat_id']);
	$cat_title = mysqli_real_escape_string($mysqli, $_POST['cat_title']);
	
		
	// checking empty fields
	if(empty($cat_id) || empty($cat_title) ) {
				
		if(empty($cat_id)) {
			echo "<font color='red'>cat_id field is empty.</font><br/>";
		}
		
		if(empty($cat_title)) {
			echo "<font color='red'>cat_title field is empty.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO categories (cat_id,cat_title) VALUES('$cat_id','$cat_title')");
		
		//display success message
		echo"<script>window.open('cate.php?tn=$r','_self')</script>";
	}
}
?>
</body>
</html>
