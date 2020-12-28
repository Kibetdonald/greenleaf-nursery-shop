
<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM variety ORDER BY variety_id ASC"); // using mysqli_query instead
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Farmer Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="Style.css">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
    <p><i class="fa fa-phone" style="font-size:28px"></i> Call Tel: +254703959145 | Best Online Nursery Store.Delivered!</p>
                
                   
    </div>
</div>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GREENLEAF</span
                >
            
            </div>
       
        
        
        <div id="navigation">
        <nav>
            
           
            
            </nav>
            </div>
        </div>
        <br><br><br><br><br><br>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#1aaa1a">
	<h1>Add/Edit/Delete Variety</h1></div><br>
	</body>
</html>

<a href="add_sub.php">Add Variety</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#1aaa1a'>
		<td>Variety_id</td>
		<td>Variety_Title</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['variety_id']."</td>";
		echo "<td>".$res['variety_title']."</td>";
		echo "<td><a href=\"var_edit.php?id=$res[variety_id]\">Edit</a> |<a href=\"var_delete.php?id=$res[variety_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";				
	}
	?>
	</table>



</body>
</html>
