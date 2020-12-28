
<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM farmer ORDER BY farmer_id DESC"); // using mysqli_query instead
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="Style.css">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>

        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
        
        
      
            
        </div>
        
        <div id="navigation">
        <nav>
            
            
            
            </nav><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        
    <br><br><br><br><br><br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#1aaa1a">
	<h1>Manage Farmers</h1></div><br>
	</body>
</html>

<a href="add.php">Add Farmer</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#1aaa1a'>
		<td>Farmer_id</td>
		<td>Username</td>
		<td>Phone Number</td>
		<td>Email_Id</td>
		<td>Password</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['farmer_id']."</td>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['Email_Id']."</td>";
		echo "<td>".$res['password']."</td>";
			
		
		echo "<td><a href=\"edit.php?id=$res[farmer_id]\">Edit</a>|<td><a href=\"delete.php?id=$res[farmer_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete Farmer</a></td>";				
		
	
	
	}
	?>
	</table>



</body>
</html>
