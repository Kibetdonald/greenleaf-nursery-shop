
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
	<h1>Add Variety</h1></div><br>
	</body>
</html>

	<form action="add var.php" method="post" name="form1">
		<table width="35%" border="0">
			<tr> 
				<td>Variety id</td>
				<td><input type="text" name="variety_id"></td>
			</tr>
			<tr> 
				<td>Variety Title</td>
				<td><input type="text" name="variety_title"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>


