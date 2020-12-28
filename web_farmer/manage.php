


<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Email_Id'])){
$farmer_id=$_SESSION['farmer_id'];
$Email_Id=$_SESSION['Email_Id'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../Login.php");
exit();
}
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
  <?php include("include/header.php");?>
    <div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#1AAA1A">
    <h1>Manage Plants</h1></div><br>
    <a href="http://localhost/project/web_farmer/add_product.php">Add Plants</a>
    <form action="result.php" method="get"> 
		
		
		<input type="text" name="user_query" size="80" placeholder="Type Keywords & Press Enter"/> 
		<input type="submit" name="search" value="Search Now">
		
	
	</form>

</body>
</html>