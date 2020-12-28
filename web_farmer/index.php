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


$session_email = $_SESSION['Email_Id'];
$select_customer = "select * from farmer where Email_Id='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$username = $row_customer['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" href="Style.css">
<title>Farmer Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   <style>
	
.profile_info img {
	
	width: 50px; 
	height: 50px; 
	margin: 5px;
	
}

</style>
</head>
<body>
     <div id="wrapper">
    <div id="header">
         <div id="subheader">
              <div class="container">
         
         <br><br><br>
                
</div>
             <center>
        <div id="main-header">
        <div id="logo">
            <span id="IST">GRE</span
                ><span id="IIST">ENLEAF</span>
            
            </div>
        
      
            
        </div>
                 </center>
        </div>
        <div id="navigation">
        <nav>
            
         
            </nav>
        
            <BR>
  <BR>
  <BR>

   	
   	<div class="container-fluid main-container">
	<?php include("include/header.php");?>
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#1AAA1A">
	<h1>Welcome Farmer,
    <?php echo $username; ?>.</h1>
    
     <div class="profile_info">
			<img src="admin_profile.png"  >
			</div> </h1></div><br>
	<div class="panel-body">
		<h3>
<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?></h3>
	</div>
        </div></div>
<?php include("include/js.php"); ?>
             
       
    
</div>
</body>
</html>