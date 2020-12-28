
<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM categories ORDER BY cat_id ASC"); // using mysqli_query instead
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
	<h1>Add/Edit/Delete Category</h1></div><br>
	</body>
</html>

<a href="add.php">Add Category</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#1aaa1a'>
		<td>Category_id</td>
		<td>Cat_Title</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['cat_id']."</td>";
		echo "<td>".$res['cat_title']."</td>";
		echo "<td><a href=\"cat_edit.php?id=$res[cat_id]\">Edit</a> |<a href=\"cat_delete.php?id=$res[cat_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";				
	
	
	}
	?>
	</table>



</body>
</html>
